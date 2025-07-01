<script setup lang="ts">
import { ref } from 'vue'

defineProps<{
  msg: string
}>();


const counter = ref(2)

const increment = () => { counter.value++ }
const decrease = () => { counter.value-- }

</script>

<template>
  <div class="greetings">
    <p class="green">{{ counter }}</p>
    <button class="" @click="increment">Increase +</button>
    <button class="" @click="decrease">Decrease -</button>
  </div>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings p {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings p {
    text-align: left;
  }
}
</style>
