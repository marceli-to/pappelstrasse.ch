<template>
  <div :class="classes">
    <slot></slot>
  </div>
</template>

<script setup>
const props = defineProps({
  classes: {
    type: String,
    default: 'mb-15 lg:mb-20'
  }
});
</script>
