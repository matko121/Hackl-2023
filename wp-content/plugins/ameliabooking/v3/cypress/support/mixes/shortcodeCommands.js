import {amelia} from '../data'

Cypress.Commands.add('appointmentShortcode', (items, shortcode, setting) => {
  if ('hasCart' in setting && setting.hasCart && amelia.licence.isBasic) {
    return
  } else if (amelia.licence.isBasic) {
    items.forEach((item, index) => {
      if ('package' in items[index]) {
        delete items[index].package
      }
    })

    if ('items' in shortcode) {
      shortcode.items.forEach((item, index) => {
        if ('package' in shortcode.items[index]) {
          delete shortcode.items[index].package
        }
      })
    }
  }

  let config = {
    entities: shortcode.entities,
    skipServiceSelection: 'service' in shortcode.shortcodeData || ('skipServiceSelection' in shortcode && shortcode.skipServiceSelection),
    payment: setting.payment,
    hasCart: setting.hasCart,
    fullPayment: setting.fullPayment,
    page: setting.type,
    shortcodeData: shortcode.shortcodeData,
    customerPanel: 'customerPanel' in setting && setting.customerPanel,
    testPayment: 'testPayment' in setting ? setting.testPayment : true,
  }

  items = JSON.parse(JSON.stringify(items))

  for (let i = 0; i < items.length; i++) {
    if ('items' in shortcode) {
      items[i] = Object.assign(items[i], shortcode.items[i])
    }
  }

  let test = {items: items}

  if ('finalItems' in shortcode) {
    test.finalItems = shortcode.finalItems
  }

  if ('customer' in shortcode) {
    test.customer = shortcode.customer
  }

  cy.initTesting(test, config)

  switch (config.page) {
    case 'booking':
      cy.appointmentShortcodeBooking(test, config)

      break

    case 'catalog':
      cy.appointmentShortcodeCatalog(test, config)

      break
  }
})

Cypress.Commands.add('notificationShortcode', (data, shortcode, setting, customersEmails) => {
  cy.appointmentShortcode(data.items, shortcode, setting)

  let placeholders = {
    customer_full_name: shortcode.customer.firstName + ' ' + shortcode.customer.lastName,
    employee_full_name: data.items[0].employee.name,
    service_name: data.items[0].name,
  }

  cy.wpTestPlaceholders({
    customer_appointment_pending: {
      emails: customersEmails,
      notification: amelia.notifications.appointment,
      placeholders: placeholders,
    },
    employee_appointment_pending: {
      emails: [
        data.items[0].employee.email,
      ],
      notification: amelia.notifications.appointment,
      placeholders: placeholders,
    },
  })

  cy.wpAjaxLogout()

  cy.intercept(amelia.api.qaNotifications).as('apiQaNotifications')

  cy.visit(amelia.api.qaNotifications)
  cy.wait('@apiQaNotifications')
})

/****************
 * Booking Flow *
 ****************/
Cypress.Commands.add('appointmentShortcodeBooking', (data, config) => {
  if (data.items.length === 1) {
    cy.runBookingView(
      Object.assign(
        {
          skipServiceSelection: config.skipServiceSelection,
          skipEntityView: !config.entities,
          skipPaymentView: !amelia.methods.hasPayment(data.items),
        },
        data
      ),
      0
    )
  } else {
    data.items.forEach((item) => {
      if ('recurring' in item) {
        item.recurring = null
      }

      if ('package' in item) {
        item.package = null
      }
    })

    cy.runBookingView(
      Object.assign(
        {
          skipEntityView: !config.entities,
          exit: 'CartView',
        },
        data
      ),
      0
    )

    cy.clickCartViewBookAnother()

    data.items.forEach((service, index) => {
      if (index !== 0 && index !== data.items.length - 1) {
        cy.runBookingView(
          Object.assign(
            {
              skipEntityView: !config.entities,
              skipPackagePopup: true,
              skipRecurringPopup: true,
              exit: 'CartView',
            },
            data
          ),
          index
        )

        cy.clickCartViewBookAnother()
      }
    })

    cy.runBookingView(
      Object.assign(
        {
          skipEntityView: !config.entities,
          skipPackagePopup: true,
          skipRecurringPopup: true,
          skipPaymentView: !amelia.methods.hasPayment(data.items),
        },
        data
      ),
      data.items.length - 1
    )
  }

  if (config.payment) {
    cy.runCompleteBooking(data)

    if (config.customerPanel) {
      cy.runCustomerPanel(data)
    }

    if (config.testPayment) {
      cy.wpTestBooked(data)
    }
  }
})

/****************
 * Catalog Flow *
 ****************/
Cypress.Commands.add('appointmentShortcodeCatalog', (data, config) => {
  if (data.items.length === 1) {
    if (!config.shortcodeData.category && !config.shortcodeData.service && !config.skipServiceSelection) {
      cy.clickCatalogViewCategory(amelia.methods.getCategoryName(data.items[0].categoryId))
    }

    if (!config.shortcodeData.service && !config.skipServiceSelection) {
      cy.clickCatalogViewService(data.items[0].name)
    }

    cy.clickCatalogBook()

    cy.runBookingView(
      Object.assign(
        {
          skipEntityView: !config.entities,
          skipPaymentView: !amelia.methods.hasPayment(data.items),
        },
        data
      ),
      0
    )
  } else {
    data.items.forEach((item) => {
      if ('recurring' in item) {
        item.recurring = null
      }

      if ('package' in item) {
        item.package = null
      }
    })

    if (!config.shortcodeData.service && !config.skipServiceSelection) {
      cy.clickCatalogViewCategory(amelia.methods.getCategoryName(data.items[0].categoryId))

      cy.clickCatalogViewService(data.items[0].name)
    }

    cy.clickCatalogBook()

    cy.runBookingView(
      Object.assign(
        {
          skipEntityView: !config.entities,
          exit: 'CartView',
        },
        data
      ),
      0
    )

    let lastCategory = amelia.methods.getCategoryName(data.items[0].categoryId)

    cy.clickCartViewBookAnother()

    cy.wait(amelia.other.responseTimeout)

    data.items.forEach((service, index) => {
      if (index !== 0 && index !== data.items.length - 1) {
        if (lastCategory !== amelia.methods.getCategoryName(data.items[index].categoryId)) {
          if (!config.shortcodeData.service && !config.skipServiceSelection) {
            cy.clickCatalogViewBack()

            cy.clickCatalogViewCategory(amelia.methods.getCategoryName(data.items[index].categoryId))
          }

          lastCategory = amelia.methods.getCategoryName(data.items[index].categoryId)
        }

        if (!config.shortcodeData.service && !config.skipServiceSelection) {
          cy.clickCatalogViewBack()

          cy.clickCatalogViewService(data.items[index].name)
        }

        cy.clickCatalogBook()

        cy.runBookingView(
          Object.assign(
            {
              skipEntityView: !config.entities,
              skipPackagePopup: true,
              skipRecurringPopup: true,
              exit: 'CartView',
            },
            data
          ),
          index
        )

        cy.clickCartViewBookAnother()

        cy.wait(amelia.other.responseTimeout)
      }
    })

    if (lastCategory !== amelia.methods.getCategoryName(data.items[data.items.length - 1].categoryId) && !config.shortcodeData.service && !config.skipServiceSelection) {
      cy.clickCatalogViewBack()

      cy.clickCatalogViewCategory(amelia.methods.getCategoryName(data.items[data.items.length - 1].categoryId))
    }

    if (!config.shortcodeData.service && !config.skipServiceSelection) {
      cy.clickCatalogViewBack()

      cy.clickCatalogViewService(data.items[data.items.length - 1].name)
    }

    cy.clickCatalogBook()

    cy.runBookingView(
      Object.assign(
        {
          skipEntityView: !config.entities,
          skipPackagePopup: true,
          skipRecurringPopup: true,
          skipPaymentView: !amelia.methods.hasPayment(data.items),
        },
        data
      ),
      data.items.length - 1
    )
  }

  if (config.payment) {
    cy.runCompleteBooking(data)

    if (config.customerPanel) {
      cy.runCustomerPanel(data)
    }

    if (config.testPayment) {
      cy.wpTestBooked(data)
    }
  }
})
