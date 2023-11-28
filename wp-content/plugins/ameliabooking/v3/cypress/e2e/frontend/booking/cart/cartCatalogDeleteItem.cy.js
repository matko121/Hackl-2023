import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mechanicalEngineering,
  amelia.entities.services.chemicalEngineering,
  amelia.entities.services.electricalEngineering,
  amelia.entities.services.civilEngineering,
]

data.settings = [
  {payment: 'wc', hasCart: true, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Deleting and Editing Cart Items',
    shortcodeData: {
    },
    entities: true,
    items: [
      {},
      {},
      {},
      {
        actions: {
          onInfoView: (test) => {
            // go back to cart step
            cy.clickBookingViewBack()


            // delete 'Chemical Engineering'
            cy.clickCartViewItem(1)


            cy.clickCartViewDeleteItem(1)

            cy.wait(amelia.other.responseTimeout)

            // Go back to info step
            cy.clickBookingViewContinue()
          }
        },
      },
    ],
    finalItems: [
      amelia.entities.services.mechanicalEngineering,
      amelia.entities.services.electricalEngineering,
      amelia.entities.services.civilEngineering,
    ]
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
