import {amelia} from '../data'

/***************
 * Appointment *
 ***************/
Cypress.Commands.add('testAppointmentsTotalAmount', (value) => {
  cy.get('.am-fs__payments-app-info-total').eq(0).find('span').eq(1).contains('$' + value.toFixed(2))
})

Cypress.Commands.add('testAppointmentsPayNowAmount', (value) => {
  cy.get('.am-fs__payments-app-info-total').eq(1).find('span').eq(1).contains('$' + value.toFixed(2))
})

Cypress.Commands.add('testAppointmentsPayLaterAmount', (value) => {
  cy.get('.am-fs__payments-app-info-total').eq(2).find('span').eq(1).contains('$' + value.toFixed(2))
})

/***********
 * Package *
 ***********/
Cypress.Commands.add('testPackageTotalAmount', (value) => {
  cy.get('.am-fs__payments-package-total > div').eq(0).find('span').eq(1).contains('$' + value.toFixed(2))
})

Cypress.Commands.add('testPackagePayNowAmount', (value) => {
  cy.get('.am-fs__payments-package-total > div').eq(1).find('span').eq(1).contains('$' + value.toFixed(2))
})

Cypress.Commands.add('testPackagePayLaterAmount', (value) => {
  cy.get('.am-fs__payments-package-total > div').eq(2).find('span').eq(1).contains('$' + value.toFixed(2))
})

/***********
 * Coupon *
 ***********/
Cypress.Commands.add('typePaymentViewCoupon', (value) => {
  cy.get('.am-fs__coupon').find('input').type(value)
})

Cypress.Commands.add('clickPaymentViewCoupon', () => {
  cy.get('.am-fs__coupon').find('button').click()
})

Cypress.Commands.add('testAppointmentsDiscountAmount', (value) => {
  cy.get('.am-fs__payments-app-info-discount').find('span').eq(1).contains('$' + value.toFixed(2))
})

Cypress.Commands.add('clickPaymentViewStripe', (value) => {
  cy.get('.am-fs__payments-main-button').eq(1).click()
})

/***********
 * Deposit *
 ***********/
Cypress.Commands.add('clickDepositCheckBox', () => {
  cy.get('.am-fs__payments-full').find('.el-checkbox__inner').click()
})

/**********
 * Stripe *
 **********/
Cypress.Commands.add('runPaymentStripe', () => {
  cy.checkElementExists(`iframe[name^="__privateStripeFrame"]`).iframeCustom().find('input[data-elements-stable-field-name="cardNumber"]').type('4242424242424242')
  cy.checkElementExists(`iframe[name^="__privateStripeFrame"]`).iframeCustom().find('input[data-elements-stable-field-name="cardExpiry"]').type('04/24')
  cy.checkElementExists(`iframe[name^="__privateStripeFrame"]`).iframeCustom().find('input[data-elements-stable-field-name="cardCvc"]').type('242')
})

Cypress.Commands.add('iframeCustom', { prevSubject: 'element' }, ($iframe) => {
  return new Cypress.Promise((resolve) => {
    $iframe.ready(function () {
      resolve($iframe.contents().find('body'))
    })
  })
})

Cypress.Commands.add('checkElementExists', (selector) => {
  return cy.get(selector).should('exist').then(cy.wrap)
})

/***************
 * WooCommerce *
 ***************/
Cypress.Commands.add('runPaymentWc', (test) => {
  cy.get('#place_order').click()

  cy.wait(amelia.other.requestTimeout)

  cy.wpAjaxLogout()
})
