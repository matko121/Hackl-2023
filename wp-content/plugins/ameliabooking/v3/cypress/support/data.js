const ameliaDomain = 'http://localhost/amelialivedev'

const amelia = {
  licence: {
    isLite: false,
    isBasic: false,
  },
  page: null,
  pages: {
    wpWcMyAccount: ameliaDomain + '/my-account/',
    wpWcOrders: ameliaDomain + '/wp-admin/edit.php?post_type=shop_order',
    wpWcTrash: ameliaDomain + '/wp-admin/edit.php?post_status=trash&post_type=shop_order',
    wpLogin: ameliaDomain + '/wp-login.php',
    wpLogout: ameliaDomain + '/wp-login.php?action=logout',
    wpSettings: ameliaDomain + '/wp-admin/admin.php?page=wpamelia-settings#/settings',
    wpAppointments: ameliaDomain + '/wp-admin/admin.php?page=wpamelia-appointments',
    booking: ameliaDomain + '/booking?ameliaQa=1',
    catalog: ameliaDomain + '/catalog?ameliaQa=1',
    customerPanel: ameliaDomain + '/customerpanel?ameliaQa=1',
    placeholders: ameliaDomain + '/wp-content/uploads/amelia/qa/',
  },
  api: {
    call: ameliaDomain + '/wp-admin/**',
    authenticate: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/users/authenticate',
    appointments: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/appointments**',
    slots: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/slots&**',
    bookings: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/bookings',
    success: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/bookings/success*',
    coupon: ameliaDomain + '/wp-admin/admin-ajax.php?action=wpamelia_api&call=/coupons/**',
    qaAppointments: ameliaDomain + '/wp-admin/admin-ajax.php?action=ameliaQaAppointments',
    qaSettings: ameliaDomain + '/wp-admin/admin-ajax.php?action=ameliaQaSettings&',
    qaNotifications: ameliaDomain + '/wp-admin/admin-ajax.php?action=ameliaQaNotifications',
  },
  wp: {
    login: ameliaDomain + '/wp-admin/admin-ajax.php?action=ameliaQaLogin',
    logout: ameliaDomain + '/wp-admin/admin-ajax.php?action=ameliaQaLogout',
  },
  other: {
    responseTimeout: 500,
    requestTimeout: 0,
    dayCounter: 0,
    skipMonth: 2,
  },
  hasCart: false,
  payment: null,
  fullPayment: false,
  coupon: {
    code: 'abc',
    discount: 10,
    deduction: 0,
    limit: 3,
  },
  admin: {
    name: 'root',
    password: 'root',
  },
  customer: {
    password: 'pass',
    firstName: 'Ž1',
    lastName: 'R1',
    email: 'zradicdev@gmail.com',
  },
}

amelia.methods = {
  getTestName: (setting, name) => {
    return setting.type.charAt(0).toUpperCase().concat(
      setting.type.slice(1),
      (setting.hasCart ? ' (Cart): ' : ': '),
      name
    )
  },
  getCategoryName: (id) => {
    return amelia.entities.categories[id].name
  },
  hasExit: (item, view) => {
    return 'exit' in item && item.exit === view
  },
  hasPayment: (items) => {
    let hasPayment = false

    items.forEach((item) => {
      if (amelia.methods.getServicePrice(item)) {
        hasPayment = true
      } else if ('extras' in item) {
        Object.keys(item.extras).forEach((extraName) => {
          if (item.rules.extras[extraName].price) {
            hasPayment = true
          }
        })
      }
    })

    return hasPayment
  },
  getFinalItems: (test) => {
    return 'finalItems' in test ? test.finalItems : test.items
  },
  getTotalAmount: (items) => {
    if ('package' in items[0] && items[0].package) {
      return amelia.methods.getPackageTotalAmount(items[0])
    } else {
      return amelia.methods.getAppointmentsTotalPrice(items)
    }
  },
  getServicePrice (item) {
    return 'duration' in item ? item.rules.durations[item.duration] : item.rules.price
  },
  getAppointmentServicePrice: (item) => {
    let persons = 'persons' in item && item.persons ? item.persons + 1 : 1

    return amelia.methods.getServicePrice(item) * (item.rules.aggregatedPrice ? persons : 1)
  },
  getAppointmentExtrasPrice: (item) => {
    let amount = 0

    if ('extras' in item) {
      let persons = 'persons' in item && item.persons ? item.persons + 1 : 1

      Object.keys(item.extras).forEach((extraName) => {
        amount += item.rules.extras[extraName].price * item.extras[extraName] * (item.rules.extras[extraName].aggregatedPrice ? persons : 1)
      })
    }

    return amount
  },
  getAppointmentDiscountAmount: (item) => {
    if ('coupon' in item.rules && item.rules.coupon) {
      let amount = amelia.methods.getAppointmentTotalPrice(item)

      if (amelia.coupon.discount) {
        amount = parseFloat(parseFloat(amount / 100 * amelia.coupon.discount).toFixed(2))
      }

      if (amelia.coupon.deduction) {
        amount -= amelia.coupon.deduction
      }

      return amount
    }

    return 0
  },
  getAppointmentTotalPrice: (item) => {
    return amelia.methods.getAppointmentServicePrice(item) + amelia.methods.getAppointmentExtrasPrice(item)
  },
  getAppointmentDepositPrice: (item, applyCoupon) => {
    let amount = amelia.methods.getAppointmentTotalPrice(item) - (applyCoupon ? amelia.methods.getAppointmentDiscountAmount(item) : 0)

    if ('deposit' in item.rules && (item.rules.deposit.fullAmount ? !amelia.fullPayment : true)) {
      if (item.rules.deposit.fixed) {
        let persons = 'persons' in item && item.persons ? item.persons + 1 : 1

        amount = item.rules.deposit.value * (item.rules.aggregatedPrice ? persons : 1)
      } else {
        amount = parseFloat(parseFloat(amount / 100 * item.rules.deposit.value).toFixed(2))
      }
    }

    return amount
  },
  getAppointments: (items) => {
    let appointments = []

    if ('recurring' in items[0] && items[0].recurring !== null) {
      appointments.push(items[0])

      for (let i = 1; i <= items[0].recurring.count; i++) {
        appointments.push(items[0])
      }
    } else {
      items.forEach((item) => {
        appointments.push(item)
      })
    }

    return appointments
  },
  getAppointmentsTotalPrice: (items) => {
    let amount = 0

    amelia.methods.getAppointments(items).forEach((item) => {
      amount += amelia.methods.getAppointmentTotalPrice(item)
    })

    return amount
  },
  getAppointmentsDepositPrice: (items) => {
    let amount = 0

    let couponCounter =
      'coupon' in amelia &&
      (items.length === 1 ? (!('package' in items[0]) || !items[0].package) : true) ? amelia.coupon.limit : 0

    let depositAppointments = 'recurring' in items[0] && items[0].recurring !== null && items[0].recurring.payFirst
      ? [items[0]] : amelia.methods.getAppointments(items)

    depositAppointments.forEach((item) => {
      if ('coupon' in item.rules && item.rules.coupon) {
        couponCounter--
      }

      amount += amelia.methods.getAppointmentDepositPrice(item, couponCounter >= 0)
    })

    return amount
  },
  getAppointmentsDiscountAmount: (items) => {
    let amount = 0

    let couponCounter =
      'coupon' in amelia &&
      (items.length === 1 ? (!('package' in items[0]) || !items[0].package) : true) ? amelia.coupon.limit : 0

    amelia.methods.getAppointments(items).forEach((item) => {
      if ('coupon' in item.rules && item.rules.coupon) {
        couponCounter--
      }

      amount += couponCounter >= 0 ? amelia.methods.getAppointmentDiscountAmount(item) : 0
    })

    return amount
  },
  getPackageDepositAmount: (item) => {
    let amount = amelia.methods.getPackageTotalAmount(item)

    if ('deposit' in item.package.rules && (item.package.rules.deposit.fullAmount ? !amelia.fullPayment : true)) {
      if (item.package.rules.deposit.fixed) {
        amount = item.package.rules.deposit.value
      } else {
        amount = amount / 100 * item.package.rules.deposit.value
      }
    }

    return amount
  },
  getPackageTotalAmount: (item) => {
    return item.package.price
  },
}

amelia.entities = {}

amelia.entities.categories = {
  1: {
    id: 1,
    name: 'Science',
  },
  2: {
    id: 2,
    name: 'Engineering',
  },
}

amelia.entities.packages = {
  engineeringPack: {
    id: 1,
    name: 'Engineering Pack',
    price: 360,
    services: [
      {
        id: 5,
        count: 1,
        rules: {
          minimum: 0,
          maximum: 2,
        },
      },
      {
        id: 6,
        count: 1,
        rules: {
          minimum: 0,
          maximum: 2,
        },
      },
      {
        id: 7,
        count: 1,
        rules: {
          minimum: 0,
          maximum: 2,
        },
      },
      {
        service: 8,
        count: 1,
        rules: {
          minimum: 0,
          maximum: 2,
        },
      },
    ],
    rules: {
      deposit: {
        value: 10,
        fixed: false,
        fullAmount: false,
      },
    },
  },
}

amelia.notifications = {
  appointment: [
    'customer_full_name',
    'employee_full_name',
    'service_name',
  ],
  package: {},
  cart: {},
}

amelia.entities.employees = {
  manyServicesOneLocation: {
    id: 5,
    name: 'Doctor Doom',
    email: 'zradictest@gmail.com',
  },
  oneServiceOneLocation: {
    id: 6,
    name: 'Green Goblin',
    email: 'zradictest@outlook.com',
  },
  manyServicesManyLocations: {
    id: 7,
    name: 'Rocket Raccoon',
    email: 'zradictest@yahoo.com',
  },
}

amelia.entities.services = {
  mathematics: {
    id: 1,
    categoryId: 1,
    name: 'Mathematics',
    rules: {
      price: 0,
      aggregatedPrice: true,
    },
  },
  physics: {
    id: 2,
    categoryId: 1,
    name: 'Physics',
    extras: {
      'Laboratory Experiments' : 2,
      'Field Experiments': 3,
    },
    rules: {
      price: 0,
      aggregatedPrice: true,
      extras: {
        'Laboratory Experiments': {
          price: 0,
          aggregatedPrice: false,
        },
        'Field Experiments': {
          price: 5,
          aggregatedPrice: false,
        },
      },
      wc: {
        tax: 10,
      },
    },
  },
  chemistry: {
    id: 3,
    categoryId: 1,
    name: 'Chemistry',
    persons: 2,
    extras: {
      'Laboratory Experiments': 2,
      'Field Experiments': 3,
    },
    duration: 0,
    recurring: {
      count: 3,
      end: null,
      cycleCount: null,
      cycleType: null,
      payFirst: true,
    },
    rules: {
      price: 10,
      aggregatedPrice: true,
      durations: {
        0: 10,
        1: 15,
        2: 25,
      },
      deposit: {
        value: 25,
        fixed: false,
        fullAmount: true,
      },
      extras: {
        'Laboratory Experiments': {
          price: 0,
          aggregatedPrice: false,
        },
        'Field Experiments': {
          price: 5,
          aggregatedPrice: false,
        },
      },
      coupon: true,
      wc: {
        tax: 10,
      },
    },
  },
  biology: {
    id: 4,
    categoryId: 1,
    name: 'Biology',
    employee: amelia.entities.employees.manyServicesOneLocation,
    persons: 0,
    duration: 2,
    rules: {
      price: 40,
      aggregatedPrice: true,
      durations: {
        0: 40,
        1: 45,
        2: 55,
      },
      deposit: {
        value: 25,
        fixed: false,
        fullAmount: false,
      },
      coupon: true,
    },
  },
  mechanicalEngineering: {
    id: 5,
    categoryId: 2,
    name: 'Mechanical Engineering',
    package: amelia.entities.packages.engineeringPack,
    rules: {
      price: 30,
      aggregatedPrice: true,
      coupon: true,
    },
  },
  electricalEngineering: {
    id: 6,
    categoryId: 2,
    name: 'Electrical Engineering',
    package: amelia.entities.packages.engineeringPack,
    persons: 2,
    rules: {
      price: 40,
      aggregatedPrice: true,
      coupon: true,
    },
  },
  chemicalEngineering: {
    id: 7,
    categoryId: 2,
    name: 'Chemical Engineering',
    package: amelia.entities.packages.engineeringPack,
    extras: {
      'Testing': 1,
    },
    rules: {
      price: 50,
      aggregatedPrice: true,
      extras: {
        'Testing': {
          price: 0,
          aggregatedPrice: false,
        },
      },
    },
  },
  civilEngineering: {
    id: 8,
    categoryId: 2,
    name: 'Civil Engineering',
    package: amelia.entities.packages.engineeringPack,
    persons: 2,
    extras: {
      'Testing': 1,
    },
    recurring: {
      count: 3,
      end: null,
      cycleCount: null,
      cycleType: null,
      payFirst: false,
    },
    rules: {
      price: 60,
      aggregatedPrice: true,
      deposit: {
        value: 25,
        fixed: false,
        fullAmount: true,
      },
      extras: {
        'Testing': {
          price: 0,
          aggregatedPrice: false,
        },
      },
      coupon: true,
    },
  },
}

amelia.entities.locations = {
  3: 'New York City'
}

if (amelia.licence.isBasic) {
  Object.keys(amelia.entities.services).forEach((name) => {
    if ('package' in amelia.entities.services[name]) {
      delete amelia.entities.services[name].package
    }
  })
}

export {amelia}
