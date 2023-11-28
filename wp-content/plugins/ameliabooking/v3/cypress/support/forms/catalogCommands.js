Cypress.Commands.add('clickCatalogViewCategory', (categoryName) => {
  cy.get('.am-fcl__item-name', {responseTimeout: 200}).contains(categoryName).parent().parent().find('button').click()
})

Cypress.Commands.add('clickCatalogViewBack', () => {
  cy.get('.am-cat__back-btn', {responseTimeout: 200}).find('button').click()
})

Cypress.Commands.add('clickCatalogViewService', (serviceName) => {
  cy.get('.am-fcil__item-name', {responseTimeout: 200}).contains(serviceName).parent().parent().find('.am-button--primary').last().click()
})

Cypress.Commands.add('clickCatalogViewDialogClose', () => {
  cy.get('.amelia-v2-booking-dialog').find('.el-dialog__header').find('.am-icon-close').click()
})

Cypress.Commands.add('clickCatalogBook', () => {
  cy.get('.am-button--primary').click()
})
