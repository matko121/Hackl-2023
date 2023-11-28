<template>
  <div
    v-if="props.data"
    class="am-fs__ci"
    :style="cssVars"
  >
    <div class="am-fs__ci-main">
      <!-- Service -->
      <div class="am-fs__ci-block">
        <div class="am-fs__ci-title">
          {{ amLabels.service_colon }}
        </div>
        <div class="am-fs__ci-prod">
          <div class="am-fs__ci-prod__title">
            <span class="am-fs__ci-prod__title-name">
              {{ service.name }}
            </span>
            <span
              v-if="servicePrice"
              class="am-fs__ci-prod__title-price"
            >
              {{`(${useFormattedPrice(useAppointmentServiceAmount(service, 1, appointment.duration))})`}}
            </span>
            <span class="am-fs__ci-prod__title-number">
              {{ `x ${appointment.persons} ${appointment.persons === 1 ? amLabels.summary_person : amLabels.summary_persons}` }}
            </span>
          </div>
          <div
            v-if="servicePrice"
            class="am-fs__ci-prod__price"
          >
            {{ useFormattedPrice(servicePrice) }}
          </div>
        </div>
        <div
          v-if="servicePrice"
          class="am-fs__ci-cost"
        >
          <div class="am-fs__ci-cost__title">
            {{ amLabels.summary_services_subtotal }}
          </div>
          <div class="am-fs__ci-cost__price">
            {{ useFormattedPrice(servicePrice) }}
          </div>
        </div>
      </div>
      <!-- /Service -->

      <!-- Extras -->
      <div
        v-if="appointment.extras.length"
        class="am-fs__ci-block"
      >
        <div class="am-fs__ci-title">
          {{ amLabels.extras }}
        </div>
        <div
          v-for="(extraData, extraIndex) in appointment.extras"
          :key="extraIndex"
          class="am-fs__ci-prod"
        >
          <div class="am-fs__ci-prod__title">
            <span class="am-fs__ci-prod__title-name">
              {{ extraData.name }}
            </span>
            <span
              v-if="extraData.price"
              class="am-fs__ci-prod__title-price"
            >
              {{`(${useFormattedPrice(extraData.price)})`}}
            </span>
            <span class="am-fs__ci-prod__title-number">
              {{ ` x ${extraData.quantity}` }}
            </span>
            <span class="am-fs__ci-prod__title-number">
              {{ ` x ${appointment.persons} ${appointment.persons === 1 ? amLabels.summary_person : amLabels.summary_persons}` }}
            </span>
          </div>
          <div
            v-if="extrasPrice"
            class="am-fs__ci-prod__price"
          >
            {{ useFormattedPrice(useAppointmentExtraAmount(service, extraData, appointment.persons)) }}
          </div>
        </div>
        <div
          v-if="appointment.extras.length && extrasPrice"
          class="am-fs__ci-cost"
        >
          <div class="am-fs__ci-cost__title">
            {{ amLabels.summary_extras_subtotal }}
          </div>
          <div class="am-fs__ci-cost__price">
            {{ useFormattedPrice(extrasPrice) }}
          </div>
        </div>
      </div>
      <!-- /Extras -->

      <!-- Total -->
      <div class="am-fs__ci-block">
        <div
          v-if="servicePrice + extrasPrice"
          class="am-fs__ci-cost"
        >
          <div class="am-fs__ci-cost__title">
            {{ amLabels.total_price }}
          </div>
          <div class="am-fs__ci-cost__price">
            {{ useFormattedPrice(servicePrice + extrasPrice) }}
          </div>
        </div>
      </div>
      <!-- /Total -->
    </div>

    <div class="am-fs__ci-info">
      <div class="am-fs__ci-title">
        {{ amLabels.info }}
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-calendar"></span>
        <span>
          {{ getFrontedFormattedDate(appointment.date) }}
        </span>
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-clock"></span>
        <span>
          {{ `${getFrontedFormattedTime(appointment.time)} - ${getFrontedFormattedTime(addSeconds(appointment.time, duration))}` }}
        </span>
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-user"></span>
        <span>
          {{ `${employee.firstName} ${employee.lastName}` }}
        </span>
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-date-time"></span>
        <span>
          {{ useSecondsToDuration(duration, amLabels.h, amLabels.min) }}
        </span>
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-locations"></span>
        <span>
          {{ location.name }}
        </span>
      </div>
      <div class="am-fs__ci-info__el">
        <span class="am-icon-users-plus"></span>
        <span>
          {{ `${appointment.persons} / ${service.maxCapacity}` }}
        </span>
      </div>
    </div>

    <div
      v-if="enabledManage()"
      class="am-fs__ci-manage"
    >
      <div
        class="am-fs__ci-manage__discard"
        @click="emits('removeCartItem', props.index)"
      >
        <span class="am-icon-bucket"></span>
        <span>{{ amLabels.delete }}</span>
      </div>
      <div
        class="am-fs__ci-manage__edit"
        @click="editCartItem(props.index)"
      >
        <span>{{ amLabels.edit }}</span>
        <span class="am-icon-edit"></span>
      </div>
    </div>
  </div>
</template>

<script setup>

import { computed, inject, ref } from "vue";
import { useStore } from "vuex";
import { useCart, useCartItem } from "../../../../assets/js/public/cart";
import { useColorTransparency } from "../../../../assets/js/common/colorManipulation";
import { useFormattedPrice } from "../../../../assets/js/common/formatting";
import {
  addSeconds,
  useSecondsToDuration,
  getFrontedFormattedTime,
  getFrontedFormattedDate
} from "../../../../assets/js/common/date";
import {
  useAppointmentServiceAmount,
  useAppointmentExtraAmount,
  useAppointmentExtrasAmount,
  useEmployeeService,
} from '../../../../assets/js/common/appointments'

let props = defineProps({
  data: {
    type: Object,
    default: null
  },
  index: {
    type: Number,
    default: 0
  },
  size: {
    type: Number,
    default: 0
  },
  globalClass: {
    type: String,
    default: ''
  }
})

let store = useStore()

let amLabels = inject('amLabels')

const { changeInitStepDataService } = inject('initDataChanges', {
  changeInitStepDataService: () => {}
})

/**************
 * Navigation *
 *************/
const emits = defineEmits(['removeCartItem'])

const stepIndex = inject('stepIndex', 0)

let sidebarSteps = inject('sidebarSteps')

function enabledManage () {
  return store.getters['shortcodeParams/getForm'] === 'stepForm' ? props.size > 1 : true
}

function goToStep (index) {
  store.commit('booking/setCartItemIndex', index)

  sidebarSteps.value[stepIndex.value].finished = true

  stepIndex.value = 0
}

function editCartItem (index) {
  goToStep(index)

  let cartItem = useCartItem(store)

  store.commit('booking/setCurrentCartItem', JSON.parse(JSON.stringify(cartItem)))

  if (!cartItem.packageId) {
    let preselected = store.getters['entities/getPreselected']

    store.commit('booking/setServiceId', cartItem.serviceId)

    if (!preselected.employee) {
      store.commit('booking/setEmployeeId', cartItem.services[cartItem.serviceId].list[0].providerId)
    }

    if (!preselected.location) {
      store.commit('booking/setLocationId', cartItem.services[cartItem.serviceId].list[0].locationId)
    }
  }

  changeInitStepDataService()
}

let service = ref(
  useEmployeeService(store, props.data.serviceId, props.data.services[props.data.serviceId].list[0].providerId)
)

let employee = ref(
  store.getters['entities/getEmployee'](props.data.services[props.data.serviceId].list[0].providerId)
)

let location = ref(
  props.data.services[props.data.serviceId].list[0].locationId
    ? store.getters['entities/getLocation'](props.data.services[props.data.serviceId].list[0].locationId) : {name: ''}
)

let appointment = ref(
  props.data.services[props.data.serviceId].list[0]
)

let servicePrice = ref(
  useAppointmentServiceAmount(
    service.value,
    appointment.value.persons,
    appointment.value.duration
  )
)

let extrasPrice = ref(
  useAppointmentExtrasAmount(
    service.value,
    [appointment.value]
  )
)

let duration = ref(
  appointment.value.duration + appointment.value.extras.reduce(
    (accumulator, extra) => {
      return accumulator + (extra.duration * extra.quantity)
    },
    0
  )
)

let amColors = inject('amColors')

let cssVars = computed(() => {
  return {
    // am - amelia
    // c  - color
    // ci - cart item
    // op - opacity
    '--am-c-ci-text': amColors.value.colorMainText,
    '--am-c-ci-text-op80': useColorTransparency(amColors.value.colorMainText, 0.8),
    '--am-c-ci-text-op60': useColorTransparency(amColors.value.colorMainText, 0.6),
    '--am-c-ci-text-op30': useColorTransparency(amColors.value.colorMainText, 0.3),
    '--am-c-ci-text-op05': useColorTransparency(amColors.value.colorMainText, 0.05),
    '--am-c-ci-success': amColors.value.colorSuccess,
    '--am-c-ci-primary': amColors.value.colorPrimary,
    '--am-c-ci-error': amColors.value.colorError,
  }
})
</script>

<script>
export default {
  name: 'CartItemBody'
}
</script>

<style lang="scss">
.amelia-v2-booking #amelia-container {
  // am - amelia
  // fs - form step
  // ci - cart item
  .am-fs__ci {
    width: 100%;
    padding: 12px;

    * {
      word-break: break-word;
    }

    &-block {
      padding: 0 0 12px;
      margin: 0 0 12px;
      border-bottom: 1px dashed var(--am-c-ci-text-op30);

      &:last-of-type {
        border: none;
        margin: 0;
      }
    }

    &-title {
      width: 100%;
      font-size: 12px;
      font-weight: 500;
      line-height: 1.333333;
      margin: 0 0 8px;
      color: var(--am-c-ci-text-op60);
    }

    &-prod {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0 0 8px;

      &__title {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        color: var(--am-c-ci-text);

        * {
          display: block;
          font-size: 13px;
          line-height: 1.38462;
          font-weight: 400;
          margin-right: 4px;
          color: var(--am-c-ci-text);
        }
      }

      &__price {
        flex: 0 0 auto;
        align-self: flex-start;
        font-size: 13px;
        line-height: 1.38462;
        font-weight: 400;
        color: var(--am-c-ci-text);
      }
    }

    &-cost {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 12px 0 0;

      * {
        font-size: 13px;
        line-height: 1.38462;
        font-weight: 500;
        color: var(--am-c-ci-text);
      }
    }

    &-info {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      padding: 12px;
      background: var(--am-c-ci-text-op05);
      border-radius: 8px;

      &__el {
        display: flex;
        align-items: center;
        margin: 0 10px 0 0;

        span {
          display: block;
          font-size: 13px;
          font-weight: 400;
          line-height: 1.38462;
          color: var(--am-c-ci-text-op80);

          &[class*="am-icon"] {
            font-size: 24px;
            line-height: 1;
            color: var(--am-c-ci-primary);
          }
        }
      }
    }

    &-manage {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 14px 0 0;

      div {
        display: flex;
        align-items: center;
        padding: 2px 6px;
      }

      span {
        display: block;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.42857;
        cursor: pointer;

        &[class*="am-icon"] {
          font-size: 24px;
          line-height: 1;
        }
      }

      &__discard {
        color: var(--am-c-ci-error);
      }

      &__edit {
        color: var(--am-c-ci-primary);
      }
    }
  }


}
</style>
