<template>
  <div
    class="am-fs__cart"
    ref="cartRef"
    :class="props.globalClass"
  >
    <div
      class="am-fs__cart-title"
      v-html="amLabels.cart_title"
    ></div>

    <div
      v-show="!loading"
      v-if="!removingItem"
      class="am-fs__cart-includes"
    >
      <AmCollapse>
        <AmCollapseItem
          v-for="(item, index) in cart"
          :ref="el => setCollapseItem(el, index)"
          :key="index"
          :side="true"
        >
          <template #heading>
            <CartItemHead :data="item"></CartItemHead>
          </template>
          <template #default>
            <CartItemBody
              :data="item"
              :index="index"
              :size="cart.length"
              @remove-cart-item="removeCartItem"
            >
            </CartItemBody>
          </template>
        </AmCollapseItem>
      </AmCollapse>
    </div>

    <BookingSkeleton/>
  </div>
</template>

<script setup>
// * Components parts
import BookingSkeleton from "../../Parts/BookingSkeleton.vue";

// * _components
import AmCollapseItem from "../../../_components/collapse/AmCollapseItem";
import AmCollapse from "../../../_components/collapse/AmCollapse";

// * Dedicated components
import CartItemHead from "./CartItemHead";
import CartItemBody from "./CartItemBody";

// * Import from Vue
import {
  computed,
  inject,
  ref,
  watchEffect,
  provide,
  onMounted,
  nextTick,
  watch
} from "vue";

// * Import from Vuex
import { useStore } from "vuex";

// * Composables
import { useCart } from "../../../../assets/js/public/cart";

import { getFrontedFormattedTime, getFrontedFormattedDate } from "../../../../assets/js/common/date";

// * Components properties
let props = defineProps({
  globalClass: {
    type: String,
    default: ''
  }
})

// * Store
let store = useStore()

// * Component labels
let amLabels = inject('amLabels')

// * Component reference
let cartRef = ref(null)
// * Plugin wrapper width
let wrapperWidth = ref()
provide('wrapperWidth', wrapperWidth)

// * window resize listener
window.addEventListener('resize', resize);
// * resize function
function resize() {
  if (cartRef.value) {
    wrapperWidth.value = cartRef.value.offsetWidth
  }
}

onMounted (() => {
  nextTick(() => {
    wrapperWidth.value = cartRef.value.offsetWidth
  })
})

let sidebarCollapsed = inject('sidebarCollapsed', ref(false))

watch(sidebarCollapsed, (current) => {
  if (current) {
    setTimeout(() => {
      wrapperWidth.value = cartRef.value.offsetWidth
    }, 1200)
  } else {
    setTimeout(() => {
      wrapperWidth.value = cartRef.value.offsetWidth
    }, 400)
  }
})

/**************
 * Navigation *
 *************/

const {
  nextStep,
  footerButtonReset,
  footerButtonClicked
} = inject('changingStepsFunctions', {
  nextStep: () => {},
  footerButtonReset: () => {},
  footerButtonClicked: {
    value: false
  }
})

let sidebarSteps = inject('sidebarSteps')

let loading = computed(() => store.getters['booking/getLoading'])

let removingItem = ref(false)

let cart = computed(() => useCart(store).filter(i => i.serviceId && i.serviceId in i.services))

/**
 * Submit Form Function
 */
watchEffect(() => {
  if (footerButtonClicked.value) {
    footerButtonReset()

    nextStep()
  }
})

let appointmentsList = ref([])

let initCollapseLoadCompleted = ref(false)

function setCollapseItem (el, index) {
  appointmentsList.value[index] = el

  if (index === 0 && !initCollapseLoadCompleted.value) {
    initCollapseLoadCompleted.value = true
  }
}

function removeCartItem (index) {
  removingItem.value = true

  appointmentsList.value[index].closingFromParent()

  let cart = useCart(store)

  if (cart.length > 1) {
    cart.splice(index, 1)

    store.commit('booking/setCartItemIndex', cart.length - 1)
  } else {
    cart[0].serviceId = null

    cart[0].services = {}
  }

  if (cart.length === 1) {
    sidebarSteps.value.forEach((item) => {
      if (item.name === 'InitStep') {
        item.stepSelectedData = [
          {
            reference: 'service',
            position: 0,
            value: store.getters['entities/getService'](cart[0].serviceId).name
          },
          {
            reference: 'employee',
            position: 1,
            value: store.getters['entities/getEmployee'](cart[0].services[cart[0].serviceId].list[0].providerId).firstName + ' ' + store.getters['entities/getEmployee'](cart[0].services[cart[0].serviceId].list[0].providerId).lastName
          },
        ]

        if (cart[0].services[cart[0].serviceId].list[0].locationId) {
          item.stepSelectedData.push({
            reference: 'location',
            position: 2,
            value: store.getters['entities/getLocation'](cart[0].services[cart[0].serviceId].list[0].locationId).name
          })
        }
      }

      if (item.name === 'DateTimeStep') {
        item.stepSelectedData = [
          {
            reference: 'slot',
            position: 1,
            value: getFrontedFormattedDate(cart[0].services[cart[0].serviceId].list[0].date) + ' - ' + getFrontedFormattedTime(cart[0].services[cart[0].serviceId].list[0].time)
          }
        ]
      }
    })
  }

  setTimeout(() => {
    removingItem.value = false
  }, 200)
}
</script>

<script>
export default {
  name: 'CartStep',
  key: 'cartStep',
  inheritAttrs: false,
  sidebarData: {
    label: 'cart_step',
    icon: 'cart',
    stepSelectedData: [],
    finished: false,
    selected: false,
  }
}
</script>

<style lang="scss">
.amelia-v2-booking {
  #amelia-container {
    .am-fs__cart {
      // am - amelia
      // c  - color
      // cart - cart
      --am-c-cart-text: var(--am-c-main-text);
      --am-c-cart-bgr: var(--am-c-main-bgr);

      & > * {
        $count: 2;
        @for $i from 0 through $count {
          &:nth-child(#{$i + 1}) {
            animation: 600ms cubic-bezier(.45,1,.4,1.2) #{$i*100}ms am-animation-slide-up;
            animation-fill-mode: both;
          }
        }
      }

      &-title {
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857;
        color: var(--am-c-cart-text);
        margin: 0;
      }

      &-includes {
        margin: 16px 0 0;

        .am-collapse-item {
          $count: 100;
          @for $i from 0 through $count {
            &:nth-child(#{$i + 1}) {
              animation: 600ms cubic-bezier(.45,1,.4,1.2) #{$i*100}ms am-animation-slide-up;
              animation-fill-mode: both;
            }
          }

          &__heading {
            padding: 12px;
            transition-delay: .5s;

            &-side {
              transition-delay: 0s;
            }
          }

          &__trigger {
            &-side {
              padding: 0 4px 0 10px;
            }
          }
        }
      }
    }
  }
}
</style>
