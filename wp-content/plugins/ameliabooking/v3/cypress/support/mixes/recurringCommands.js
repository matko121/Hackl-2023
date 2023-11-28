import {amelia} from '../data'

Cypress.Commands.add('runRecurringView', (test, itemIndex) => {
  let item = test.items[itemIndex]

  if (item.recurring) {
    if (item.recurring.count) {
      for (let i = 1; i < item.recurring.count; i++) {
        cy.clickRecurringIncrement()
      }
    }

    cy.intercept(amelia.api.slots).as('apiSlotsCall')

    cy.clickBookingViewContinue()

    cy.wait('@apiSlotsCall')

    cy.wait(amelia.other.responseTimeout)

    cy.clickBookingViewContinue()
  }
})
