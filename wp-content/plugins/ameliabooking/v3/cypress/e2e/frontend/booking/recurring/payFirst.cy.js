import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.chemistry
]

data.settings = [
  {payment: 'wc', hasCart: true, type: 'booking'},
  {payment: 'wc', hasCart: false, type: 'booking'},
  {payment: 'wc', hasCart: true, type: 'catalog'},
  {payment: 'wc', hasCart: false, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Recurring PayFirst',
    shortcodeData: {
    },
    entities: true,
  },
]

describe(
  'Recurring PayFirst',
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
        it(amelia.methods.getTestName(setting, shortcode.name), () => {
          cy.appointmentShortcode(data.items, shortcode, setting)
        })
      })
    })
  }
)
