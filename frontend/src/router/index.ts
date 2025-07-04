import { createRouter, createWebHistory } from 'vue-router'

// Layouts
import DefaultLayout from '@/layouts/DefaultLayout.vue'

// Views
import HomeView from '@/views/HomeView.vue'
import SitesView from '@/views/SitesView.vue'

const routes = [
  {
      path: '/',
      component: DefaultLayout,
      children: [
        {
          path: ``,
          alias: '/home',
          name: 'Home',
          component: HomeView,
          meta: {
            mainID: 'home'
          }
        },
        {
          path: `sites`,
          name: 'Sites',
          component: SitesView,
          meta: {
            mainID: 'sites'
          }
        }
      ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
