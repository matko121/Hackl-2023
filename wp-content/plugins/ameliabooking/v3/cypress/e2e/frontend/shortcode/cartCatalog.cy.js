import {amelia} from '../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mathematics,
]

data.settings = [
  {payment: null, hasCart: true, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Editing Cart Items',
    type: 'booking',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        actions: {
          onCartView: (test) => {
            cy.clickCartViewBookAnother()

            cy.wait(amelia.other.responseTimeout)

            cy.clickCatalogBook()

            cy.wait(amelia.other.responseTimeout)

            cy.clickBookingViewContinue()

            cy.wait(amelia.other.responseTimeout)

            cy.runCalendar()

            cy.wait(amelia.other.responseTimeout)

            cy.clickCatalogViewDialogClose()

            cy.wait(amelia.other.responseTimeout)

            cy.clickCartViewCatalogCartIcon()
          },
        }
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
