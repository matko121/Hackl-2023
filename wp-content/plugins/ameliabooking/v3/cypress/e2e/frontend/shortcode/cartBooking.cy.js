import {amelia} from '../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics,
]

data.settings = [
  {payment: null, hasCart: true, type: 'booking'},
]

data.shortcodes = [
  {
    name: 'Editing Cart Items',
    type: 'booking',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        actions: {
          onCartView: (test) => {
            cy.clickCartViewBookAnother()

            cy.clickBookingViewContinue()

            cy.clickCancelBookAnother()

            cy.clickBookingViewBack()

            cy.clickBookingViewContinue()
          },
        }
      },
    ],
  },
]

describe(
  'Cart',
  () => {
    data.settings.forEach((setting) => {
      afterEach(
        () => {
          cy.qaAppointments()
        }
      )

      beforeEach(
        () => {
          cy.qaAppointments()
        }
      )

      data.shortcodes.forEach((shortcode) => {
        it(shortcode.name, () => {
          cy.appointmentShortcode(data.items, shortcode, setting)
        })
      })
    })
  }
)
