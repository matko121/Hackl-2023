Cypress.Commands.add('clickRecurringIncrement', () => {
  cy.get('.am-fs__rs-ends-after >> .el-input-number__increase').click()
})
