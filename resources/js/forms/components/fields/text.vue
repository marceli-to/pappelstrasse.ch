<template>
  <div class="relative">
    <input
      :type="type"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      @focus="$emit('update:error', '')"
      class="w-full bg-white !ring-0 !border-0 !outline-0 text-forest placeholder:text-forest px-5 py-5 lg:px-10"
      :placeholder="placeholderText"
      :class="[
        { 'placeholder:!text-red-700': errorMessage },
      ]"
    >
  </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  modelValue: {
    type: [String, Number],
    default: ''
  },
  type: {
    type: String,
    default: 'text'
  },
  placeholder: {
    type: [String, Array],
    default: ''
  },
  error: {
    type: [String, Array],
    default: ''
  },
});

const errorMessage = computed(() => {
  return Array.isArray(props.error) ? props.error[0] : props.error;
});

const placeholderText = computed(() => {
  return Array.isArray(props.placeholder) ? props.placeholder[0] : props.placeholder;
});

defineEmits(['update:modelValue', 'update:error']);
</script>
