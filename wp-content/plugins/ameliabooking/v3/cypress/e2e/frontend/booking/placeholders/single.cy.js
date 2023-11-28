import {amelia} from '../../../../support/data'

let data = {}

data.items = [
  amelia.entities.services.biology,
]

data.settings = [
  {payment: 'onSite', hasCart: false, type: 'booking', testPayment: false},
]

data.shortcodes = [
  {
    name: 'Placeholders',
    shortcodeData: {
    },
    entities: true,
  },
]

describe(
  'Placeholders',
  () => {
    data.settings.forEach((setting) => {
      afterEach(
        () => {
          cy.qaAppointments()
          cy.qaNotifications()
        }
      )

      beforeEach(
        () => {
          cy.qaAppointments()
          cy.qaNotifications()
        }
      )

      data.shortcodes.forEach((shortcode) => {
        it(shortcode.name, () => {
          let firstCustomer = amelia.customer

          cy.appointmentShortcode(data.items, Object.assign({customer: firstCustomer}, shortcode), setting)

          cy.wait(amelia.other.responseTimeout * 4)

          let firstPlaceholders = {
            customer_full_name: firstCustomer.firstName + ' ' + firstCustomer.lastName,
            employee_full_name: data.items[0].employee.name,
            service_name: data.items[0].name,
          }

          cy.wpTestPlaceholders({
            customer_appointment_pending: {
              users: [
                {
                  email: firstCustomer.email,
                  placeholders: firstPlaceholders,
                }
              ],
              notification: amelia.notifications.appointment,
            },
            employee_appointment_pending: {
              users: [
                {
                  email: data.items[0].employee.email,
                  placeholders: {
                    customer_full_name: firstCustomer.firstName + ' ' + firstCustomer.lastName,
                    employee_full_name: data.items[0].employee.name,
                    service_name: data.items[0].name,
                  },
                }
              ],
              notification: amelia.notifications.appointment,
            },
          })

          cy.qaNotifications()


          let secondCustomer = {firstName: 'Ž2', lastName: 'R2', email: 'zradicdev@outlook.com'}

          cy.appointmentShortcode(data.items, Object.assign({customer: secondCustomer}, shortcode), setting)

          cy.wait(amelia.other.responseTimeout * 4)

          let secondPlaceholders = {
            customer_full_name: secondCustomer.firstName + ' ' + secondCustomer.lastName,
            employee_full_name: data.items[0].employee.name,
            service_name: data.items[0].name,
          }

          cy.wpTestPlaceholders({
            customer_appointment_pending: {
              users: [
                {
                  email: secondCustomer.email,
                  placeholders: secondPlaceholders,
                }
              ],
              notification: amelia.notifications.appointment,
            },
            employee_appointment_pending: {
              users: [
                {
                  email: data.items[0].employee.email,
                  placeholders: {
                    customer_full_name: firstCustomer.firstName + ' ' + firstCustomer.lastName + ', ' +
                      secondCustomer.firstName + ' ' + secondCustomer.lastName,
                    employee_full_name: data.items[0].employee.name,
                    service_name: data.items[0].name,
                  },
                }
              ],
              notification: amelia.notifications.appointment,
            },
          })

          cy.qaNotifications()


          let thirdCustomer = {firstName: 'Ž3', lastName: 'R3', email: 'zradicdev@yahoo.com'}

          cy.appointmentShortcode(data.items, Object.assign({customer: thirdCustomer}, shortcode), setting)

          cy.wait(amelia.other.responseTimeout * 4)

          let thirdPlaceholders = {
            customer_full_name: thirdCustomer.firstName + ' ' + thirdCustomer.lastName,
            employee_full_name: data.items[0].employee.name,
            service_name: data.items[0].name,
          }

          cy.wpTestPlaceholders({
            customer_appointment_approved: {
              users: [
                {
                  email: firstCustomer.email,
                  placeholders: firstPlaceholders,
                },
                {
                  email: secondCustomer.email,
                  placeholders: secondPlaceholders,
                },
                {
                  email: thirdCustomer.email,
                  placeholders: thirdPlaceholders,
                }
              ],
              notification: amelia.notifications.appointment,
            },
            employee_appointment_approved: {
              users: [
                {
                  email: data.items[0].employee.email,
                  placeholders: {
                    customer_full_name: firstCustomer.firstName + ' ' + firstCustomer.lastName + ', ' +
                      secondCustomer.firstName + ' ' + secondCustomer.lastName + ', ' +
                      thirdCustomer.firstName + ' ' + thirdCustomer.lastName,
                    employee_full_name: data.items[0].employee.name,
                    service_name: data.items[0].name,
                  },
                }
              ],
              notification: amelia.notifications.appointment,
            },
          })

          cy.qaNotifications()
        })
      })
    })
  }
)
