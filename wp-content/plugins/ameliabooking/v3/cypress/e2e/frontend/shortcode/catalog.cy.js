import {amelia} from '../../../support/data'

let data = {}

Object.values(amelia.entities.packages.engineeringPack.services).forEach((item) => {
  item.count = 0
})

data.items = [
  amelia.entities.services.civilEngineering
]

data.settings = [
  {hasCart: true, type: 'catalog'},
]

data.shortcodes = [
  {
    name: 'Select Package -> Go Back -> Select Recurring -> Go Back',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        package: null,
        actions: {
          onPackagePopupView: (test) => {
            cy.clickPackagePopupPackageSelect(amelia.entities.packages.engineeringPack.name)

            cy.clickBookingViewBack()

            cy.clickBookingViewContinue()
          },
          onRecurringPopupView: (test) => {
            cy.clickRecurringPopupYes()

            cy.clickBookingViewBack()

            cy.clickBookingViewContinue()

            cy.clickRecurringPopupNo()

            cy.clickCartViewBookAnother()

            cy.clickCartViewCatalogCartIcon()

            cy.clickBookingViewBack()
          },
        }
      }
    ],
  },
  {
    name: 'Select Service -> Book Another -> Select Other Service -> Close Dialog -> Click Cart Icon',
    shortcodeData: {
    },
    entities: true,
    items: [
      {
        package: null,
        recurring: null,
        actions: {
          onCartView: (test) => {
            cy.clickCartViewBookAnother()

            cy.clickCatalogViewBack()

            cy.clickCatalogViewBack()

            let service = amelia.entities.services.mathematics

            cy.clickCatalogViewCategory(amelia.entities.categories[service.categoryId].name)

            cy.clickCatalogViewService(service.name)

            cy.clickCatalogBook()

            cy.clickCatalogViewDialogClose()

            cy.wait(amelia.other.responseTimeout)

            cy.clickCartViewCatalogCartIcon()

            cy.wait(amelia.other.responseTimeout)
          }
        }
      }
    ],
  },
]

describe(
  'Package -> Calendar',
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
