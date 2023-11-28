import {amelia} from '../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics
]

data.settings = [
  {hasCart: true, type: 'booking'},
  {hasCart: false, type: 'booking'},
  {hasCart: true, type: 'catalog'},
  {hasCart: false, type: 'catalog'},
]

data.shortcodes = [
  {
    name: '(Selected Nothing) Entity -> Calendar',
    shortcodeData: {
    },
    entities: true,
  },
  {
    name: '(Selected Employee with Many Services and Many Locations) Entity -> Calendar',
    shortcodeData: {
      employee: amelia.entities.employees.manyServicesManyLocations.id,
    },
    entities: true,
  },
  {
    name: '(Selected Service) Entity -> Calendar',
    shortcodeData: {
      service: data.items[0].id,
    },
    entities: true,
  },
  {
    name: '(Selected Service and Employee with Many Services and One Location) Calendar',
    shortcodeData: {
      service: data.items[0].id,
      employee: amelia.entities.employees.manyServicesOneLocation.id,
    },
    entities: false,
  },
  {
    name: '(Selected Employee With One Service and One Location) Calendar',
    shortcodeData: {
      employee: amelia.entities.employees.oneServiceOneLocation.id,
    },
    entities: false,
    skipServiceSelection: true,
  },
  {
    name: '(Selected Employee With One Service and One Location) Calendar',
    shortcodeData: {
      category: data.items[0].categoryId,
      employee: amelia.entities.employees.oneServiceOneLocation.id,
    },
    entities: false,
    skipServiceSelection: true,
  },
]

describe(
  'Calendar',
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
