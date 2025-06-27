<template>
  <div class="app">
    <h1>Vue.js + TypeScript + PHP</h1>

    <p>
      Este projeto usa Vue 3 com TypeScript e um backend PHP rodando no Docker.
    </p>

    <button @click="fetchBackend">Carregar dados do backend</button>

    <div v-if="loading">Carregando...</div>

    <div v-if="error" class="error">
      Erro ao buscar dados: {{ error }}
    </div>

    <pre v-if="backendResponse">{{ backendResponse }}</pre>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const backendResponse = ref<string | null>(null)
const loading = ref(false)
const error = ref<string | null>(null)

async function fetchBackend() {
  backendResponse.value = null
  error.value = null
  loading.value = true

  try {
    const res = await fetch('/api/index.php')
    if (!res.ok) {
      throw new Error(`HTTP ${res.status}`)
    }
    const text = await res.text()
    backendResponse.value = text
  } catch (err: any) {
    error.value = err.message
  } finally {
    loading.value = false
  }
}
</script>

<style scoped>
.app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  max-width: 800px;
  margin: 2rem auto;
  padding: 1rem;
  text-align: center;
}

button {
  margin: 1rem;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
}

.error {
  color: red;
  margin-top: 1rem;
}
</style>
