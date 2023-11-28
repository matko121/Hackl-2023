Cypress.Commands.add('typeInfoViewFirstName', (value) => {
  cy.get('.am-info-first-name').find('input').clear().type(value)
})

Cypress.Commands.add('typeInfoViewLastName', (value) => {
  cy.get('.am-info-last-name').find('input').clear().type(value)
})

Cypress.Commands.add('typeInfoViewEmail', (value) => {
  cy.get('.am-info-email').find('input').clear().type(value)
})
