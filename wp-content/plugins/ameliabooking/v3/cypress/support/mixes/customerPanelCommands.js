import {amelia} from "../data";

Cypress.Commands.add('runCustomerPanel', (test) => {
  cy.runCustomerPanelLogin()

  cy.runCustomerPanelAppointments()

  cy.runCustomerPanelAppointmentReschedule()
})

Cypress.Commands.add('runCustomerPanelLogin', (test) => {
  cy.intercept(amelia.api.authenticate).as('apiAuthenticateCall')

  cy.visit(amelia.pages.customerPanel)

  cy.wait(amelia.other.requestTimeout)

  cy.get('.am-asi__form').find('input').eq(0).clear().type(amelia.customer.email)

  cy.get('.am-asi__form').find('input').eq(1).clear().type(amelia.customer.password)

  cy.get('.am-asi__btn').click()

  cy.wait('@apiAuthenticateCall')
})

Cypress.Commands.add('runCustomerPanelAppointments', (test) => {
  cy.intercept(amelia.api.appointments).as('apiAppointmentsCall')

  cy.get('.am-fs-sb__page-heading').contains('Appointments').click()

  cy.wait('@apiAppointmentsCall')
})

Cypress.Commands.add('runCustomerPanelAppointmentReschedule', (test) => {
  cy.intercept(amelia.api.slots).as('apiSlotsCall')

  cy.get('.am-cc__heading-actions').last().click()

  cy.get('.am-cc__edit-text').contains('Reschedule').click()

  cy.wait('@apiSlotsCall')

  cy.runCalendar()

  cy.get('.am-csd__reschedule > .am-slide-popup__up-footer').find('button').eq(1).click()
})
