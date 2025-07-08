<template>
    <div class="min-h-screen flex flex-col">
        <SiteHeader/>
        
        <main :id="mainID">
            <NuxtPage />
        </main>

        <SiteFooter />
    </div>
</template>

<script lang="ts" setup>
import { useRoute } from 'vue-router'
import { computed } from 'vue'
import SiteHeader from '~/components/MainHeader.vue'
import SiteFooter from '~/components/MainFooter.vue'

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