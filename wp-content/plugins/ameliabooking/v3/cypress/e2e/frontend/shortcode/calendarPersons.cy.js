import {amelia} from '../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.biology
]

data.settings = [
  {hasCart: true, type: 'booking'},
  {hasCart: false, type: 'booking'},
  {hasCart: true, type: 'catalog'},
  {hasCart: false, type: 'catalog'},
]

data.shortcodes = [
  {
    name: '(Selected Nothing) Entity -> Persons -> Calendar',
    shortcodeData: {
    },
    entities: true,
  },
  {
    name: '(Selected Service and Employee with Many Services and One Location) Extras -> Calendar',
    shortcodeData: {
      service: data.items[0].id,
      employee: amelia.entities.employees.manyServicesOneLocation.id,
    },
    entities: false,
  },
]

describe(
  'Persons -> Calendar',
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
