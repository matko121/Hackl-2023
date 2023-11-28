/***********************
 * Booking Form Header *
 ***********************/
Cypress.Commands.add('clickBookingViewBack', () => {
  cy.get('.am-icon-arrow-left').click()
})

/****************
 * Package View *
 ****************/
Cypress.Commands.add('clickPackagePopupServiceContinue', () => {
  cy.get('.am-package-popup-continue').last().click()
})

Cypress.Commands.add('clickPackagePopupPackageSelect', (packageName) => {
  cy.get('.am-package-popup', {responseTimeout: 200}).find('.am-fs__ps-name').contains(packageName).click({force: true})
})

/****************
 * Persons View *
 ****************/
Cypress.Commands.add('clickPersonsIncrement', () => {
  cy.get('.am-fs__bringing-content >> .el-input-number__increase').click()
})

Cypress.Commands.add('clickPersonsPopupYes', () => {
  cy.get('.am-fs__init__bringing').find('button.am-button--primary').last().click({force: true})
})

Cypress.Commands.add('clickPersonsPopupNo', () => {
  cy.get('.am-fs__init__bringing').find('button.am-button--secondary').first().click({force: true})
})

Cypress.Commands.add('clickExtrasIncrement', (extraName) => {
  cy.get('.am-fs__extras-card__header-left').contains(extraName).parent().find('.el-input-number__increase').click()
})

/*****************
 * Recurring View *
 *****************/
Cypress.Commands.add('clickRecurringPopupYes', () => {
  cy.get('.am-fs-dt__calendar__recurring >> .am-slide-popup__up-footer', {responseTimeout: 200}).find('button').last().click({force: true})
})

Cypress.Commands.add('clickRecurringPopupNo', (packageName) => {
  cy.get('.am-fs-dt__calendar__recurring >> .am-slide-popup__up-footer', {responseTimeout: 200}).find('button').first().click({force: true})
})

/***********************
 * Booking Form Footer *
 ***********************/
Cypress.Commands.add('clickBookingViewContinue', () => {
  cy.get('.am-fs__main-footer > .am-button-continue', {responseTimeout: 200}).click()
})

Cypress.Commands.add('clickBookingViewBack', () => {
  cy.get('.am-heading-prev', {responseTimeout: 200}).click()
})
