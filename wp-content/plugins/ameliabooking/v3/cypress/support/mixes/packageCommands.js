import {amelia} from '../data'

Cypress.Commands.add('runPackagePopup', (data, itemIndex) => {
  let item = data.items[itemIndex]

  if ('actions' in data.items[itemIndex] && 'onPackagePopupView' in data.items[itemIndex].actions && data.items[itemIndex].actions.onPackagePopupView !== null) {
    data.items[itemIndex].actions.onPackagePopupView(data)
  }

  if (item.package) {
    cy.clickPackagePopupPackageSelect(item.package.name)

    cy.runPackageView(data, itemIndex)
  } else {
    cy.clickPackagePopupServiceContinue()
  }
})

Cypress.Commands.add('runPackageView', (data, itemIndex) => {
  let item = data.items[itemIndex]

  cy.intercept(amelia.api.slots).as('apiSlotsCall')

  cy.clickBookingViewContinue()

  item.package.services.forEach((service) => {
    if (service.rules.minimum) {
      cy.runPackageCalendarAppointment(service)
    } else if (service.rules.maximum && service.count) {
      for (let i = 0; i < service.count; i++) {
        cy.intercept(amelia.api.slots).as('apiSlotsCall')

        cy.clickPackageCalendarAddAppointment()

        cy.runPackageCalendarAppointment(service)
      }

      cy.clickBookingViewContinue()
    } else if (service.rules.maximum) {
      cy.wait(amelia.other.responseTimeout * 2)

      cy.clickBookingViewContinue()
    } else {
      cy.clickBookingViewContinue()
    }
  })

  cy.clickBookingViewContinue()
})

Cypress.Commands.add('runPackageCalendarAppointment', (service) => {
  if (service.count) {
    cy.wait('@apiSlotsCall')

    cy.runCalendar()
  } else {
    cy.clickBookingViewContinue()
  }
})
