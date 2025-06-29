// src/router/index.ts
import { createRouter, createWebHistory } from 'vue-router'
import SitesView from '@/views/SitesView.vue'

const routes = [
  {
    path: '/sites',
    name: 'Sites',
    component: SitesView
  },
  // outras rotas...
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
