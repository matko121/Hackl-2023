import {amelia} from '../data'

Cypress.Commands.add('initTesting', (test, options) => {
  amelia.other.dayCounter = 0

  if ('hasCart' in options) {
    amelia.hasCart = options.hasCart
  } else {
    amelia.hasCart = false
  }

  if ('page' in options) {
    amelia.page = options.page
  }

  if ('payment' in options) {
    amelia.payment = options.payment
  } else {
    amelia.payment = null
  }

  if ('fullPayment' in options) {
    amelia.fullPayment = options.fullPayment
  } else {
    amelia.fullPayment = false
  }

  cy.qaSettings()

  cy.get('body')

  cy.viewport(window.screen.width, window.screen.height)

  if (options.payment === 'wc') {
    cy.wpAjaxLogin('customer' in test ? test.customer : amelia.customer)
  }

  cy.wait(amelia.other.requestTimeout)

  cy.visit(amelia.pages[amelia.page])

  cy.wait(amelia.other.requestTimeout)

  cy.intercept(amelia.api.slots).as('apiSlotsCall')
  cy.intercept(amelia.api.bookings).as('apiBookingsCall')
  cy.intercept(amelia.api.bookings).as('apiPaymentWcCall')
  cy.intercept(amelia.api.success).as('apiSuccessCall')
  cy.intercept(amelia.api.coupon).as('apiCouponCall')

  cy.wait(amelia.other.requestTimeout)

  let shortcodeData = JSON.parse(JSON.stringify(options.shortcodeData))

  if ('service' in shortcodeData) {
    shortcodeData.service = shortcodeData.service.toString()
  }

  if ('employee' in shortcodeData) {
    shortcodeData.employee = shortcodeData.employee.toString()
  }

  if ('location' in shortcodeData) {
    shortcodeData.location = shortcodeData.location.toString()
  }

  if ('package' in shortcodeData) {
    shortcodeData.package = shortcodeData.package.toString()
  }

  cy.window().then((win) => {
    win.amelia.load(
      Object.assign(
        {
          hasApiCall: true,
          trigger: '',
          trigger_type: '',
          show: '',
          counter: '1000',
          category: '',
          service: '',
          employee: '',
          location: '',
          package: ''
        },
        shortcodeData
      )
    )
  })
})

Cypress.Commands.add('qaAppointments', () => {
  if (amelia.payment) {
    cy.intercept(amelia.api.qaAppointments).as('apiQaAppointmentsCall')

    cy.visit(amelia.api.qaAppointments)

    cy.wait('@apiQaAppointmentsCall')
  }
})

Cypress.Commands.add('qaSettings', () => {
  cy.intercept(amelia.api.qaSettings + 'payment=' + (amelia.payment ? amelia.payment : '') + '&cart=' + (amelia.hasCart ? 1 : 0)).as('apiQaSettingsCall')

  cy.visit(amelia.api.qaSettings + 'payment=' + (amelia.payment ? amelia.payment : '') + '&cart=' + (amelia.hasCart ? 1 : 0))

  cy.wait('@apiQaSettingsCall')
})

Cypress.Commands.add('qaNotifications', () => {
  cy.intercept(amelia.api.qaNotifications).as('apiQaNotifications')

  cy.visit(amelia.api.qaNotifications)

  cy.wait('@apiQaNotifications')
})

Cypress.Commands.add('wpAjaxLogin', (user) => {
  cy.wpAjaxLogout()

  let loginUrl = amelia.wp.login + '&pass=' + user.password

  if ('email' in user) {
    loginUrl += '&email=' + user.email
  } else if ('name' in user) {
    loginUrl += '&name=' + user.name
  }

  cy.intercept(loginUrl).as('wpLoginCall')

  cy.visit(loginUrl).as('wpLoginCall')
})

Cypress.Commands.add('wpAjaxLogout', () => {
  let logoutUrl = amelia.wp.logout

  cy.intercept(logoutUrl).as('wpLogoutCall')

  cy.visit(logoutUrl).as('wpLogoutCall')
})

Cypress.Commands.add('wpDahboardLogin', (user) => {
  cy.visit(amelia.pages.wpLogin)

  cy.wait(amelia.other.requestTimeout)

  cy.get('#user_login').clear().type('name' in user ? user.name : user.email)

  cy.get('#user_pass').clear().type(user.password)

  cy.get('#wp-submit').click()

  cy.wait(amelia.other.requestTimeout)
})

Cypress.Commands.add('wpDahboardLoginRetry', () => {
  for (let i = 0; i < 5; i++) {
    cy.url().then(($url) => {
      if ($url.includes(amelia.pages.wpLogin)) {
        cy.get('#user_login').clear().type(amelia.admin.name)

        cy.get('#user_pass').clear().type(amelia.admin.password)

        cy.get('#wp-submit').click()
      }
    })
  }
})

Cypress.Commands.add('wpDahboardLogout', () => {
  cy.visit(amelia.pages.wpLogout)

  cy.wait(amelia.other.requestTimeout)

  cy.get('#error-page').find('a').click()

  cy.wait(amelia.other.requestTimeout)
})
