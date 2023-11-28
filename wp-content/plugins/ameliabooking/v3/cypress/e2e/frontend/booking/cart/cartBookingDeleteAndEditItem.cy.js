import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.mechanicalEngineering,
  amelia.entities.services.chemicalEngineering,
  amelia.entities.services.electricalEngineering,
]

data.settings = [
  {payment: 'wc', hasCart: true, type: 'booking'},
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
      {
        actions: {
          onInfoView: (test) => {
            let editedTest = {
              exit: 'CartView',
              items: [
                amelia.entities.services.mathematics,
                amelia.entities.services.chemistry,
                amelia.entities.services.biology,
              ],
              payment: test.payment,
              skipPackagePopup: true,
              skipRecurringPopup: true,
            }

            // go back to cart step
            cy.clickBookingViewBack()


            // delete 'Chemical Engineering'
            cy.clickCartViewItem(1)

            cy.wait(amelia.other.responseTimeout)


            cy.clickCartViewDeleteItem(1)

            cy.wait(amelia.other.responseTimeout)


            // replace 'Mechanical Engineering' with 'Mathematics'
            cy.clickCartViewItem(0)

            cy.clickCartViewEditItem(0)

            cy.wait(amelia.other.responseTimeout)

            cy.runBookingView(editedTest, 0)

            cy.wait(amelia.other.responseTimeout)


            // replace 'Electrical Engineering' with 'Chemistry'
            cy.clickCartViewItem(1)

            cy.clickCartViewEditItem(1)

            cy.wait(amelia.other.responseTimeout)

            cy.runBookingView(editedTest, 1)


            cy.clickCartViewItem(1)

            cy.clickCartViewEditItem(1)

            cy.clickCancelBookAnother()

            // add 'Biology'
            cy.clickCartViewBookAnother()

            cy.runBookingView(editedTest, 2)

            // edit 'Chemistry'
            cy.clickCartViewItem(1)

            cy.clickCartViewEditItem(1)

            cy.clickCancelEditItem()

            // click "Book Another"
            cy.clickCartViewBookAnother()

            cy.clickCancelBookAnother()

            cy.wait(amelia.other.responseTimeout)


            // Go back to info step
            cy.clickBookingViewContinue()
          }
        },
      },
    ],
    finalItems: [
      amelia.entities.services.mathematics,
      Object.assign(amelia.entities.services.chemistry, {recurring: null}),
      amelia.entities.services.biology,
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
