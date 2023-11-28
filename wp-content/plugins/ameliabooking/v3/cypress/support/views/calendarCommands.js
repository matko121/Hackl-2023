import {amelia} from '../data'

Cypress.Commands.add('clickCalendarViewNextMonth', (value) => {
  for (let i = 0; i < amelia.other.skipMonth; i++) {
    cy.intercept(amelia.api.slots).as('apiSlotsCall')

    cy.get('.am-icon-arrow-right').click()

    cy.wait('@apiSlotsCall')
  }
})

Cypress.Commands.add('clickCalendarViewDate', (value) => {
  cy.get('.fc-day-future.am-advsc__dayGridMonth-cell').not('.am-advsc__dayGridMonth-disabled').eq(value).click()
})

Cypress.Commands.add('clickCalendarViewTime', () => {
  cy.get('.am-advsc__slots-item', {responseTimeout: 1500}).first().click()
})
