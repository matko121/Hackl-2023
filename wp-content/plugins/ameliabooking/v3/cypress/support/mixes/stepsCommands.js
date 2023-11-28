import {amelia} from '../data'

/*****************
 * Frontend Flow *
 *****************/
Cypress.Commands.add('runBookingView', (test, itemIndex) => {
  let data = test.items[itemIndex]

  let skipEntityView = ('skipEntityView' in test) && test.skipEntityView

  let skipPackagePopup = ('skipPackagePopup' in test) && test.skipPackagePopup

  let skipRecurringPopup = ('skipRecurringPopup' in test) && test.skipRecurringPopup

  let skipCategorySelection = ('skipCategorySelection' in test) && test.skipCategorySelection

  let skipServiceSelection = ('skipServiceSelection' in test) && test.skipServiceSelection

  if (!skipEntityView) {
    if (amelia.page === 'booking' && !skipCategorySelection && !skipServiceSelection) {
      cy.clickEntityViewCategoryService(amelia.methods.getCategoryName(data.categoryId), data.name)
    } else if (amelia.page === 'booking' && !skipServiceSelection) {
      cy.clickEntityViewService(data.name)
    }

    if ('employee' in data && data.employee) {
      cy.clickEntityViewEmployee(data.employee.name)
    }

    cy.clickBookingViewContinue()

    if ('package' in data && !skipPackagePopup) {
      cy.runPackagePopup(test, itemIndex)
    }

    if (!('package' in data && !skipPackagePopup) || !data.package) {
      if ('persons' in data) {
        if (data.persons) {
          for (let i = 0; i < data.persons; i++) {
            cy.clickPersonsIncrement()
          }

          cy.clickPersonsPopupYes()
        } else {
          cy.clickPersonsPopupNo()
        }
      }

      if ('extras' in data) {
        cy.runExtrasView(data)

        cy.clickBookingViewContinue()
      }
    }
  } else if ('persons' in data) {
    if ('package' in data && !skipPackagePopup) {
      cy.runPackagePopup(test, itemIndex)
    }

    if (!('package' in data && !skipPackagePopup) || !data.package) {
      for (let i = 0; i < data.persons; i++) {
        cy.clickPersonsIncrement()
      }

      cy.clickBookingViewContinue()

      if ('extras' in data) {
        cy.runExtrasView(data)

        cy.clickBookingViewContinue()
      }
    }
  } else if ('extras' in data) {
    if ('package' in data && !skipPackagePopup) {
      cy.runPackagePopup(test, itemIndex)
    }

    if (!('package' in data && !skipPackagePopup) || !data.package) {
      Object.keys(data.extras).forEach((name) => {
        for (let i = 0; i < data.extras[name]; i++) {
          cy.clickExtrasIncrement(name)
        }
      })

      cy.clickBookingViewContinue()
    }
  } else if ('package' in data && !skipPackagePopup) {
    cy.runPackagePopup(test, itemIndex)
  }

  if (!('package' in data && !skipPackagePopup) || !data.package) {
    cy.wait('@apiSlotsCall')

    if ('duration' in data && data.duration) {
      cy.get('.am-advsc__duration').click()

      cy.get('.am-oitf__wrapper').eq(data.duration).click()

      cy.wait('@apiSlotsCall')
    }

    cy.runCalendar()

    if ('actions' in data && 'onCalendarView' in data.actions && data.actions.onCalendarView !== null) {
      data.actions.onCalendarView(test)
    }

    cy.clickBookingViewContinue()

    if (!skipRecurringPopup && 'recurring' in data) {
      if ('actions' in data && 'onRecurringPopupView' in data.actions && data.actions.onRecurringPopupView !== null) {
        data.actions.onRecurringPopupView(data)
      }

      if (data.recurring !== null) {
        cy.clickRecurringPopupYes()

        cy.runRecurringView(test, itemIndex)
      } else {
        cy.clickRecurringPopupNo()
      }
    }

    if (amelia.hasCart && (!('recurring' in test.items[0]) || !test.items[0].recurring)) {
      if ('actions' in data && 'onCartView' in data.actions && data.actions.onCartView !== null) {
        data.actions.onCartView(test)
      }

      if (amelia.methods.hasExit(test, 'CartView')) {
        return
      }

      cy.clickBookingViewContinue()
    }
  }

  cy.runInfoView(test)

  if (!test.skipPaymentView && !amelia.payment) {
    cy.clickBookingViewContinue()
  }

  if ('actions' in data && 'onInfoView' in data.actions && data.actions.onInfoView !== null) {
    data.actions.onInfoView(test)
  }
})

Cypress.Commands.add('runCompleteBooking', (test) => {
  if (amelia.methods.getTotalAmount(amelia.methods.getFinalItems(test)) === 0.00 ||
    ('skipPaymentView' in test && test.skipPaymentView)
  ) {
    cy.clickBookingViewContinue()

    if (amelia.payment === 'wc') {
      cy.runPaymentWc(test)
    } else {
      cy.wait('@apiBookingsCall')
    }
  } else if (!test.skipPaymentView) {
    cy.clickBookingViewContinue()

    switch (amelia.payment) {
      case ('onSite'):
        cy.testPaymentView(test)

        cy.clickBookingViewContinue()

        cy.wait('@apiBookingsCall')

        break

      case ('stripe'):
        cy.clickPaymentViewStripe()

        cy.wait(amelia.other.requestTimeout)

        cy.testPaymentView(test)

        cy.runPaymentStripe()

        cy.clickBookingViewContinue()

        cy.wait('@apiBookingsCall')

        break

      case ('wc'):
        cy.testPaymentView(test)

        cy.clickBookingViewContinue()

        cy.runPaymentWc(test)

        break
    }
  }
})

Cypress.Commands.add('runCalendar', () => {
  if (amelia.other.skipMonth > 0) {
    cy.clickCalendarViewNextMonth(amelia.other.skipMonth)
  }

  cy.wait(amelia.other.responseTimeout * 2)
  cy.clickCalendarViewDate(amelia.other.dayCounter++)
  cy.wait(amelia.other.responseTimeout)
  cy.clickCalendarViewTime()
})

Cypress.Commands.add('runInfoView', (test) => {
  if (amelia.payment !== 'wc') {
    cy.typeInfoViewFirstName('customer' in test ? test.customer.firstName : amelia.customer.firstName)
    cy.typeInfoViewLastName('customer' in test ? test.customer.lastName : amelia.customer.lastName)
    cy.typeInfoViewEmail('customer' in test ? test.customer.email : amelia.customer.email)
  }
})

Cypress.Commands.add('runExtrasView', (data) => {
  Object.keys(data.extras).forEach((name) => {
    for (let i = 0; i < data.extras[name]; i++) {
      cy.clickExtrasIncrement(name)
    }
  })
})

Cypress.Commands.add('testPaymentView', (test) => {
  if ('package' in test.items[0] && test.items[0].package) {
    cy.testPaymentPackage(test)
  } else {
    cy.testPaymentAppointment(test)
  }
})

Cypress.Commands.add('testPaymentAppointment', (test) => {
  let hasDeposit = false

  let payFullAmount = false

  let couponCode = null

  amelia.methods.getFinalItems(test).forEach((item) => {
    if ('deposit' in item.rules) {
      hasDeposit = true

      if (item.rules.deposit.fullAmount && amelia.fullPayment) {
        payFullAmount = true
      }
    }

    if ('coupon' in item.rules) {
      couponCode = amelia.coupon.code
    }
  })

  if (payFullAmount) {
    cy.clickDepositCheckBox()
  }

  let totalAmount = amelia.methods.getAppointmentsTotalPrice(amelia.methods.getFinalItems(test))

  let discountAmount = amelia.methods.getAppointmentsDiscountAmount(amelia.methods.getFinalItems(test))

  let depositAmount = amelia.methods.getAppointmentsDepositPrice(amelia.methods.getFinalItems(test))

  if (couponCode) {
    cy.typePaymentViewCoupon(couponCode)

    cy.clickPaymentViewCoupon()

    cy.wait('@apiCouponCall')

    cy.testAppointmentsDiscountAmount(discountAmount)
  }

  cy.testAppointmentsTotalAmount(totalAmount - discountAmount)

  if (hasDeposit && amelia.payment !== 'onSite') {
    cy.testAppointmentsPayNowAmount(depositAmount)

    cy.testAppointmentsPayLaterAmount(totalAmount - discountAmount - depositAmount)
  }
})

Cypress.Commands.add('testPaymentPackage', (test) => {
  let hasDeposit = false

  let payFullAmount = false

  if ('deposit' in test.items[0].package.rules) {
    hasDeposit = true

    if (test.items[0].package.rules.deposit.fullAmount && amelia.fullPayment) {
      payFullAmount = true
    }
  }

  if (payFullAmount) {
    cy.clickDepositCheckBox()
  }

  let totalAmount = amelia.methods.getPackageTotalAmount(test.items[0])

  let depositAmount = amelia.methods.getPackageDepositAmount(test.items[0])

  cy.testPackageTotalAmount(totalAmount)

  if (hasDeposit && amelia.payment !== 'onSite') {
    cy.testPackagePayNowAmount(depositAmount)

    cy.testPackagePayLaterAmount(totalAmount - depositAmount)
  }
})



/****************
 * Backend Flow *
 ****************/
Cypress.Commands.add('wpTestBooked', (test) => {
  Cypress.on('uncaught:exception', (err) => {
    return false
  })

  cy.wpDahboardLogin(amelia.admin)

  cy.wpShowAppointmentsInRange()

  cy.wpDahboardLoginRetry()

  cy.wpTestAppointmentsPricingInRange(test)
})

Cypress.Commands.add('wpShowAppointmentsInRange', () => {
  let start = new Date()

  start.setFullYear(start.getFullYear() - 1)

  let end = new Date()

  end.setFullYear(end.getFullYear() + 1)

  let firstDay = start.toISOString().split('T')[0]
  let lastDay = end.toISOString().split('T')[0]

  cy.visit(amelia.pages.wpAppointments + '&dateFrom=' + firstDay + '&dateTo=' + lastDay + '#/appointments')

  cy.wait(amelia.other.requestTimeout)
})

Cypress.Commands.add('wpTestAppointmentsPricingInRange', (test) => {
  let items = []

  let purchaseType = ''

  if ('package' in test.items[0] && test.items[0].package && test.items.length === 1) {
    purchaseType = 'package'

    test.items[0].package.services.forEach((item) => {
      for (let i = 0; i < item.count; i++) {
        items.push({
          type: 'package',
          data: test.items[0],
        })
      }
    })
  } else if ('recurring' in test.items[0] && test.items[0].recurring !== null) {
    purchaseType = 'recurring'

    test.items.forEach((item) => {
      items.push({
        type: 'service',
        data: item,
      })
    })

    for (let i = 0; i < test.items[0].recurring.count; i++) {
      test.items.forEach((item) => {
        items.push({
          type: 'service',
          data: item,
        })
      })
    }
  } else {
    purchaseType = 'service'

    amelia.methods.getFinalItems(test).forEach((item) => {
      items.push({
        type: 'service',
        data: item,
      })
    })
  }

  if (items.length === 0) {
    cy.get('.am-appointment-payment-wrap-price').should('not.exist')

    return
  }

  let couponCounter = 0

  cy.get('.am-edit-btn').each(($el, bookingIndex, $list) => {
    cy.intercept(amelia.api.call).as('apiCall')

    cy.wrap($el).find('button').click()

    cy.wait('@apiCall')

    cy.get('#tab-payment', {responseTimeout: amelia.other.responseTimeout}).click()

    cy.get('.am-link').last().click()

    let item = items[bookingIndex].data

    couponCounter = 'coupon' in amelia && (purchaseType === 'service' || purchaseType === 'recurring') ? amelia.coupon.limit : 0

    cy.get('.am-payment-summary > div').first().find('p').then(elems => {
      const texts = [...elems].map(el => el.textContent.trim())

      if ('coupon' in item.rules && item.rules.coupon) {
        couponCounter--
      }

      let discountAmount = couponCounter >= 0 ? amelia.methods.getAppointmentDiscountAmount(item) : 0

      let totalPrice = (purchaseType === 'service' || purchaseType === 'recurring')
        ? amelia.methods.getAppointmentTotalPrice(item)
        : amelia.methods.getPackageTotalAmount(item)

      let depositAmount = 0

      if (purchaseType === 'recurring') {
        if (!items[0].data.recurring.payFirst || bookingIndex === 0) {
          depositAmount = amelia.methods.getAppointmentDepositPrice(item, discountAmount)
        }
      } else if (purchaseType === 'package') {
        depositAmount = amelia.methods.getPackageDepositAmount(item)
      } else {
        depositAmount = amelia.methods.getAppointmentDepositPrice(item, discountAmount)
      }

      let taxAmount = 'wc' in item.rules && item.rules.wc.tax && depositAmount
        ? depositAmount / 100 * item.rules.wc.tax : 0

      texts.forEach((value, index) => {
        switch (value) {
          case ('Service Price'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + amelia.methods.getAppointmentServicePrice(item).toFixed(2)
            )

            break

          case ('Package Price'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + amelia.methods.getPackageTotalAmount(item).toFixed(2)
            )

            break

          case ('Extras'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + amelia.methods.getAppointmentExtrasPrice(item).toFixed(2)
            )

            break

          case ('Subtotal'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + totalPrice.toFixed(2)
            )

            break

          case ('Tax'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + taxAmount.toFixed(2)
            )

            break

          case ('Paid'):
            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + (amelia.payment !== 'onSite' ? (depositAmount + taxAmount).toFixed(2) : '0.00')
            )

            break

          case ('Due'):
            let due = amelia.payment !== 'onSite'
              ? totalPrice - discountAmount - depositAmount : totalPrice - discountAmount

            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + due.toFixed(2)
            )

            break

          case ('Total'):
            let total = totalPrice - discountAmount + taxAmount

            cy.get('.am-payment-summary > div').last().find('p').eq(index).contains(
              '$' + total.toFixed(2)
            )

            break
        }
      })
    })

    cy.get('div.am-dialog-coupon').find('.am-dialog-close').click()

    cy.get('div.am-dialog-appointment').find('.am-dialog-close').click()
  })
})

Cypress.Commands.add('wpDeleteAppointmentsInRange', () => {
  cy.get('body').then($body => {
    if ($body.find('.am-appointments-list-head').length > 0) {
      cy.get('.am-appointments-list-head').find('input').click({force: true})

      cy.get('.am-bottom-popover').find('button').first().click()

      cy.get('.am-bottom-popover').find('button').last().click()
    }
  })
})

Cypress.Commands.add('wpTestPlaceholders', (data) => {
  cy.wait(amelia.other.requestTimeout)

  Object.keys(data).forEach((templateType) => {
    data[templateType].users.forEach((user) => {
      cy.visit(amelia.pages.placeholders + templateType + '_' + user.email.replace('.com', '.html'))

      data[templateType].notification.forEach((item) => {
        cy.get('#' + item).contains(item + ' - ' + user.placeholders[item])
      })
    })
  })
})
