import {amelia} from '../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.chemicalEngineering
]

data.settings = [
  {hasCart: true, type: 'booking'},
  {hasCart: false, type: 'booking'},
  {hasCart: true, type: 'catalog'},
  {hasCart: false, type: 'catalog'},
]

data.shortcodes = [
  {
    name: '(Selected Nothing) Entity -> Package -> Extras -> Calendar',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        package: null,
      },
    ],
  },
  {
    name: '(Selected Service and Employee with Many Services and One Location) Package -> Extras -> Calendar',
    shortcodeData: {
      service: data.items[0].id,
      employee: amelia.entities.employees.manyServicesOneLocation.id,
    },
    entities: false,
    items: [
      {
        package: null,
      },
    ],
  },
]

describe(
  'Package -> Extras -> Calendar',
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
