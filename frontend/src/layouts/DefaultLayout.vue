<template>
    <div class="min-h-screen flex flex-col">
        <SiteHeader/>
        
        <main :id="mainID">
            <router-view />
        </main>

        <SiteFooter />
    </div>
</template>

<script lang="ts" setup>
import { useRoute } from 'vue-router'
import { computed } from 'vue'
import SiteHeader from '@/components/Header.vue'
import SiteFooter from '@/components/Footer.vue'

const route = useRoute()

const mainID = computed<string>(() => {
    return route.meta.mainID as string || 'default-main'
})

</script>

<style scoped>
    main {        
        width: 100%;
        margin-inline: auto;
    }
</style>