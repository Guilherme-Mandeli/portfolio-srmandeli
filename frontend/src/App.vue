<template>
  <div class="app">
    <header>
      <nav>
        <router-link to="/">Home</router-link> |
        <router-link to="/sites">Sites</router-link>
      </nav>
    </header>
    
    <main>
      <router-view />
      <hr>
      <HelloWorld msg="Meu título de teste"/>
    </main>
  </div>
</template>

<script setup lang="ts">
import HelloWorld from './components/HelloWorld.vue'
</script>

<style scoped>
.app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  max-width: 800px;
  margin: 2rem auto;
  padding: 1rem;
}

nav {
  margin-bottom: 1rem;
}

router-link {
  margin-right: 1rem;
}
</style>
