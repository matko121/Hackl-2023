import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics,
  amelia.entities.services.mathematics,
  amelia.entities.services.mathematics,
]

data.settings = [
  {hasCart: true, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Preselected Service',
    shortcodeData: {
      service: data.items[0].id
    },
    entities: true,
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
