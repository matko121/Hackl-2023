import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics,
  amelia.entities.services.physics,
  amelia.entities.services.biology,
  amelia.entities.services.chemistry,
  amelia.entities.services.civilEngineering,
]

data.settings = [
  {payment: 'wc', fullPayment: true, hasCart: true, type: 'booking'},
  {payment: 'wc', fullPayment: false, hasCart: true, type: 'booking'},
]

data.shortcodes = [
  {
    name: 'Pay Full Amount',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
      },
      {
      },
      {
        employee: null,
      },
      {
        recurring: null,
      },
      {
        recurring: null,
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
