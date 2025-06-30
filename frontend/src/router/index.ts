// src/router/index.ts
import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import SitesView from '@/views/SitesView.vue'

const routes = [
  {
      path: '/',
      name: 'Home',
      component: HomeView,
      alias: '/home'
  },
  {
    path: '/sites',
    name: 'Sites',
    component: SitesView
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
