Cypress.Commands.add('clickCartViewBookAnother', () => {
  cy.get('.am-fs__main-footer').find('button').first().click()
})

Cypress.Commands.add('clickCancelBookAnother', () => {
  cy.get('.am-fs__main-footer').find('button').first().click()
})

Cypress.Commands.add('clickCancelEditItem', () => {
  cy.get('.am-fs__main-footer').find('button').first().click()
})

Cypress.Commands.add('clickCartViewItem', (index) => {
  cy.get('div.am-fs__main-content').find('div.am-collapse-item.am-collapse-item-no-button').eq(index).click()
})

Cypress.Commands.add('clickCartViewDeleteItem', (index) => {
  cy.get('div.am-fs__main-content').find('div.am-collapse-item.am-collapse-item-no-button').eq(index).find('.am-icon-bucket').parent().click()
})

Cypress.Commands.add('clickCartViewEditItem', (index) => {
  cy.get('div.am-fs__main-content').find('div.am-collapse-item.am-collapse-item-no-button').eq(index).find('.am-icon-edit').parent().click()
})

Cypress.Commands.add('clickCartViewCatalogCartIcon', (index) => {
  cy.get('div.am-cat__cart-btn').find('span.am-icon-cart').click()
})
