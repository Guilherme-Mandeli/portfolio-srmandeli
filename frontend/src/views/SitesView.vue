<template>
  <section class="sites-view">
    <h1>Sites portfolio</h1>

    <div v-if="loading">Carregando sites...</div>
    <div v-else-if="error" class="error">{{ error }}</div>
    <div v-else>
      <div v-if="sites.length === 0">Nenhum site encontrado.</div>
      <div class="site-grid">
        <div v-for="site in sites" :key="site.id" class="site-card">
          <img :src="site.image_url" :alt="site.title" />
          <h2>{{ site.title }}</h2>
          <p>{{ site.description }}</p>
          <a :href="site.url" target="_blank">Visitar</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent, onMounted, ref } from 'vue'
import type { Site } from '@/types/Site'

export default defineComponent({
  name: 'SitesView',
  setup() {
    const sites = ref<Site[]>([])
    const loading = ref(true)
    const error = ref<string | null>(null)

    async function getSites(): Promise<void> {
      try {
        // const response = await fetch('/api/sites.php')
        const response = await fetch('http://localhost:8080/api/sites.php')


        if (!response.ok) {
          throw new Error(`HTTP error: ${response.status}`)
        }
        const data = await response.json()
        sites.value = data
      } catch (err) {
        error.value = 'Erro ao carregar sites.'
        console.error('Erro ao buscar sites:', err)
      } finally {
        loading.value = false
      }
    }

    onMounted(() => {
      getSites()
    })

    return {
      sites,
      loading,
      error
    }
  }
})
</script>

<style scoped>
.sites-view {
  padding: 2rem;
}
.site-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
.site-card {
  border: 1px solid #ddd;
  padding: 1rem;
  width: 300px;
}
.site-card img {
  width: 100%;
  height: auto;
}
.site-card h2 {
  font-size: 1.2rem;
  margin: 0.5rem 0;
}
</style>
