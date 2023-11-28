Cypress.Commands.add('clickPackageCalendarAddAppointment', () => {
  cy.get('.am-fs__pas-btn').find('button').click()
})
