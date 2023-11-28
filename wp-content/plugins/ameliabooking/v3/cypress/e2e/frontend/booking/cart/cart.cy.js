import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mechanicalEngineering,
  amelia.entities.services.electricalEngineering,
  amelia.entities.services.chemicalEngineering,
  amelia.entities.services.civilEngineering,
]

data.settings = [
  {payment: 'onSite', hasCart: true, type: 'booking'},
  {payment: 'onSite', hasCart: true, type: 'catalog'},
  {payment: 'wc', hasCart: true, type: 'booking'},
  {payment: 'wc', hasCart: true, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Cart',
    shortcodeData: {
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
