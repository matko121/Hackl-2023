import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.civilEngineering
]

data.settings = [
  {payment: 'wc', hasCart: true, type: 'booking'},
  {payment: 'wc', hasCart: false, type: 'booking'},
  {payment: 'wc', hasCart: true, type: 'catalog'},
  {payment: 'wc', hasCart: false, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Package -> Persons -> Extras -> Calendar',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        recurring: null,
      },
    ],
  },
]

describe(
  'Package || Persons -> Extras -> Calendar',
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
