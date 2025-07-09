<template>
  <a
    :href="disabled ? undefined : href"
    :class="computedClass"
    @click="handleClick"
  >
    <slot></slot>
  </a>
</template>

<script setup lang="ts">
import { computed } from 'vue'

// Define el nombre del componente
defineOptions({
  name: 'Link'
})

// Tipado de props con documentación
interface LinkProps {
  /**
   * URL de destino
   */
  href?: string

  /**
   * Classe(s) CSS personalizadas
   */
  class?: string | string[] | Record<string, boolean>

  /**
   * Define si el link está deshabilitado
   */
  disabled?: boolean
}

const props = defineProps<LinkProps>()
const emit = defineEmits<{
  (e: 'click', event: MouseEvent): void
}>()

function handleClick(event: MouseEvent) {
  if (props.disabled) {
    event.preventDefault()
    event.stopImmediatePropagation()
    return
  }
  emit('click', event)
}

const computedClass = computed(() => {
  return [
    'transition-colors underline-offset-2',
    props.disabled ? 'opacity-50 cursor-not-allowed pointer-events-none select-none' : '',
    props.class
  ]
})
</script>
