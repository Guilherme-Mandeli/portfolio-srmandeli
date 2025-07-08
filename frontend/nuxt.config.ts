// https://nuxt.com/docs/api/configuration/nuxt-config
import { defineNuxtConfig } from 'nuxt/config'
import vueDevTools from 'vite-plugin-vue-devtools'
import tsconfigPaths from 'vite-tsconfig-paths'

export default defineNuxtConfig({
    ssr: true,
    compatibilityDate: '2025-05-15',
    devtools: { enabled: true },

    modules: [
        '@nuxt/eslint',
        '@nuxt/icon',
        '@nuxt/image',
        '@nuxt/scripts',
        '@nuxt/ui',
        '@pinia/nuxt',
    ],

    css: [
        '~/assets/styles/main.css',
        '~/assets/styles/base.css'
    ],

    vite: {
        plugins: [
            vueDevTools(),
            tsconfigPaths()
        ],
        server: {
            strictPort: true,
            proxy: {
                '/api': {
                    target: 'http://backend',
                    changeOrigin: true,
                    rewrite: (path) => path.replace(/^\/api/, '')
                }
            },
            hmr: {
                protocol: 'ws',
                host: 'localhost',
                port: 5173
            }
        }
    }
})
