import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.civilEngineering,
]

data.settings = [
  {payment: 'wc', fullPayment: true, hasCart: false, type: 'booking'},
  {payment: 'wc', fullPayment: false, hasCart: false, type: 'booking'},
]

data.shortcodes = [
  {
    name: 'Pay Full Amount For All',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        package: null,
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
