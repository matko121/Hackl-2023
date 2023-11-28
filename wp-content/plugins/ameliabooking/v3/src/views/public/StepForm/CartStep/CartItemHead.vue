<template>
  <div
    class="am-fs__cserv"
    :class="useResponsiveClass(wrapperWidth)"
    :style="cssVars
">
    <div
      class="am-fs__cserv-heading"
      :class="useResponsiveClass(wrapperWidth)"
    >
      <img
        v-if="service.pictureThumbPath"
        :src="usePictureLoad(baseUrls, service, false)"
        :alt="service.name"
      >
      <span
        v-else
        class="am-fs__cserv-heading-img"
        :style="{backgroundColor: `${service.color}`}"
      >
        {{ imagePlaceholder(service.name) }}
      </span>
      <p class="am-fs__cserv-name">
        {{ service.name }}
      </p>
    </div>
    <div
      v-if="servicePrice + extrasPrice"
      class="am-fs__cserv-price"
      :class="useResponsiveClass(wrapperWidth)"
    >
      <span class="am-price">
        {{ useFormattedPrice(servicePrice + extrasPrice) }}
      </span>
    </div>
  </div>
</template>

<script setup>
import {
  computed,
  inject,
  ref,
} from 'vue'
import { useStore } from 'vuex'
import { usePictureLoad } from '../../../../assets/js/common/image'
import { useAppointmentExtrasAmount, useAppointmentServiceAmount } from '../../../../assets/js/common/appointments'
import { useFormattedPrice } from '../../../../assets/js/common/formatting'
import { useEmployeeService } from '../../../../assets/js/common/appointments'
import { useColorTransparency } from "../../../../assets/js/common/colorManipulation";
import { useResponsiveClass } from "../../../../assets/js/common/responsive";

let props = defineProps({
  data: {
    type: Object,
    default: null
  },
  globalClass: {
    type: String,
    default: ''
  }
})

function imagePlaceholder (label) {
  let shortLabel = ''

  label.split(' ').forEach(item => {
    shortLabel += item.charAt(0).toUpperCase()
  })

  if (shortLabel.length > 3) shortLabel = shortLabel.slice(0, 3)

  return shortLabel
}

let wrapperWidth = inject('wrapperWidth')

let store = useStore()

const baseUrls = inject('baseUrls')

let service = ref(
  useEmployeeService(store, props.data.serviceId, props.data.services[props.data.serviceId].list[0].providerId)
)

let servicePrice = ref(
  useAppointmentServiceAmount(
    service.value,
    props.data.services[props.data.serviceId].list[0].persons,
    props.data.services[props.data.serviceId].list[0].duration
  )
)

let extrasPrice = ref(
  useAppointmentExtrasAmount(
    service.value,
    props.data.services[props.data.serviceId].list
  )
)

let amColors = inject('amColors')

let cssVars = computed(() => {
  return {
    '--am-c-cart-text': amColors.value.colorMainText,
    '--am-c-cart-primary': amColors.value.colorPrimary,
    '--am-c-cart-primary-op10': useColorTransparency(amColors.value.colorPrimary, 0.1),
  }
})
</script>

<script>
export default {
  name: 'CartItemHead',
}
</script>

<style lang="scss">
.amelia-v2-booking {
  #amelia-container {
    // am    - amelia
    // fs    - form steps
    // cserv - cart service
    .am-fs__cserv {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;

      &.am-rw-360 {
        flex-wrap: wrap;
      }

      * {
        word-break: break-word;
      }

      img {
        width: 40px;
        height: 40px;
        border-radius: 4px;
        margin: 0 12px 0 0;
      }

      &-heading {
        display: flex;
        align-items: center;
        justify-content: center;

        &.am-rw-360 {
          width: 100%;
          justify-content: flex-start;
        }

        &-img {
          width: 40px;
          height: 40px;
          border-radius: 4px;
          font-size: 16px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex: 0 0 auto;
          color: var(--am-c-main-bgr);
          margin-right: 12px;
        }
      }

      &-name {
        font-size: 15px;
        font-weight: 500;
        line-height: 1.6;
        /* $shade-900 */
        color: var(--am-c-cart-text);
      }

      &-price {
        display: flex;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        padding: 2px 9px;
        border-radius: 12px;
        background-color: var(--am-c-cart-primary-op10);

        &.am-rw-360 {
          width: 100%;
          margin-top: 8px;
        }

        .am-price {
          display: block;
          font-size: 14px;
          font-weight: 500;
          line-height: 1.42857;
          /* $shade-900 */
          color: var(--am-c-cart-primary);
        }
      }
    }
  }
}
</style>
