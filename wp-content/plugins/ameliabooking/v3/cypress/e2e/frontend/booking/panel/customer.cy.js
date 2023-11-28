import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics,
]

data.settings = [
  {payment: 'onSite', hasCart: false, type: 'booking', customerPanel: false},
]

data.shortcodes = [
  {
    name: 'Customer Panel',
    shortcodeData: {
    },
    entities: true,
  },
]

describe(
  'Customer Panel',
  () => {
    data.settings.forEach((setting) => {
      afterEach(
        () => {
          //cy.qaAppointments()
        }
      )

      beforeEach(
        () => {
          // cy.qaAppointments()
        }
      )

      data.shortcodes.forEach((shortcode) => {
        it(shortcode.name, () => {
          //cy.appointmentShortcode(data.items, shortcode, setting)
        })
      })
    })
  }
)
