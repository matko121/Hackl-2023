Cypress.Commands.add('clickEntityViewService', (serviceName) => {
  cy.get('.el-form--default', {responseTimeout: 200}).find('input').first().click()

  cy.get('.el-select-dropdown.am-select-popper.am-service-dropdown', {responseTimeout: 200}).find('li').contains(serviceName).click()
})

Cypress.Commands.add('clickEntityViewCategory', (categoryName) => {
  cy.get('.el-form--default', {responseTimeout: 200}).find('input').first().click()

  cy.get('.el-select-dropdown.am-select-popper.am-service-dropdown', {responseTimeout: 200}).find('li').contains(categoryName).click()
})

Cypress.Commands.add('clickEntityViewCategoryService', (categoryName, serviceName) => {
  cy.get('.am-service-select', {responseTimeout: 200}).click()

  cy.get('.am-adv-select__item-label', {responseTimeout: 200}).contains(categoryName).click()

  cy.get('.am-adv-select__item-label', {responseTimeout: 200}).contains(serviceName).click()
})

Cypress.Commands.add('deselectedEntityViewService', () => {
  cy.get('.am-service-select', {responseTimeout: 200}).find('input').click()

  cy.get('#amelia-container > div.am-fs__main > div > div.am-fs__init.am-fs__main-content > form > div.el-form-item.am-service-select.el-form-item--default.am-fs__init-form__item > div > div > div > div > div > span > span > i:nth-child(2) > span').click()
})

Cypress.Commands.add('clickEntityViewEmployee', (employeeName) => {
  cy.get('.am-employee-select', {responseTimeout: 200}).find('input').click()

  cy.get('.am-oit__data-label', {responseTimeout: 200}).contains(employeeName).click()
})

Cypress.Commands.add('deselectedEntityViewEmployee', () => {
  cy.get('.am-employee-select', {responseTimeout: 200}).find('input').click()

  cy.get('#amelia-container > div.am-fs__main > div > div.am-fs__init.am-fs__main-content > form > div.el-form-item.am-employee-select.el-form-item--default.am-fs__init-form__item > div > div > div > div > div > span > span > i:nth-child(2) > span').click()
})

Cypress.Commands.add('deselectedEntityViewLocation', () => {
  cy.get('.am-location-select', {responseTimeout: 200}).find('input').click()

  cy.get('#amelia-container > div.am-fs__main > div > div.am-fs__init.am-fs__main-content > form > div.el-form-item.am-location-select.el-form-item--default.am-fs__init-form__item > div > div > div > div > div > span > span > i:nth-child(2) > span').click()
})

Cypress.Commands.add('clickPopupViewPackage', (packageName) => {
  cy.get('.am-fs__init__package >> .am-fs__ps-popup', {responseTimeout: 200}).find('p').contains(packageName).click()
})
