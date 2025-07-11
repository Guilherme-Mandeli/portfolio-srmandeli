<!-- components/animations/FadeUp.vue -->
<template>
    <p
        ref="element"
        :class="[
            'transition-all duration-[2100ms] ease-out',
            isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'
        ]"
    >
        <slot></slot>
    </p>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { useInView } from '@/composables/useInView'

const element = ref<HTMLElement | null>(null)

const isVisible = useInView(element, {
    threshold: 0,
    rootMargin: '-50% 0px -50% 0px',
})

</script>
