<template>
  <div :class="['checkboxes relative', classes]">
    <Error :error="error" class="!relative !mb-5" />
    <div class="flex items-center gap-x-5 lg:gap-x-10">
      <input
        :id="id"
        :name="name"
        :value="modelValue"
        :checked="checked"
        :disabled="disabled"
        :required="required"
        type="checkbox"
        @change="handleChange"
        class="shrink-0 w-14 lg:w-16 h-14 lg:h-16 bg-white accent-forest appearance-none border border-forest checked:bg-white relative checked:bg-[url('data:image/svg+xml,%3Csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20viewBox=%270%200%2024%2024%27%20fill=%27none%27%20stroke=%27%23003934%27%20stroke-width=%273%27%3E%3Cpath%20d=%27M20%206L9%2017L4%2012%27/%3E%3C/svg%3E')] checked:bg-center checked:bg-no-repeat checked:bg-[length:14px]"
        :class="[
          { '!border-red-700': errorMessage },
        ]"
      />
      <label :for="id" v-html="label"></label>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import Error from './error.vue';

const props = defineProps({
  id: {
    type: String,
    required: true,
  },
  name: {
    type: String,
    required: true,
  },
  modelValue: {
    type: [String, Boolean, Array],
    default: false,
  },
  value: {
    type: String,
    default: null,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  required: {
    type: Boolean,
    default: false,
  },
  label: {
    type: String,
    required: true,
  },
  classes: {
    type: [String, Array, Object],
    default: '',
  },
  error: {
    type: [String, Array],
    default: '',
  },
});

const emit = defineEmits(['update:modelValue', 'update:error']);

const checked = computed(() => {
  if (Array.isArray(props.modelValue)) {
    return props.modelValue.includes(props.value);
  }
  return props.modelValue;
});

const errorMessage = computed(() => {
  return Array.isArray(props.error) ? props.error[0] : props.error;
});

function handleChange(event) {
  if (Array.isArray(props.modelValue)) {
    const newValue = [...props.modelValue];
    if (event.target.checked) {
      if (!newValue.includes(props.value)) {
        newValue.push(props.value);
      }
    } else {
      const index = newValue.indexOf(props.value);
      if (index > -1) {
        newValue.splice(index, 1);
      }
    }
    emit('update:modelValue', newValue);
  } else {
    emit('update:modelValue', event.target.checked);
  }
  if (event.target.checked) {
    emit('update:error', '');
  }
}
</script>
