<template>
    <header>
        <nav>
            <RouterLink to="/">Home</RouterLink>
            <RouterLink to="/sites">Sites</RouterLink>
        </nav>
    </header>
</template>

<script lang="ts" setup>
defineOptions({
  name: 'MainHeader'
})
</script>

<style scoped>
    header {
        z-index: 1000;
    }
    nav {
        display: flex;
        position: fixed;
        top: 12px;
        left: 50%;
        background-color: rgb(255 255 255 / .08);
        gap: 16px;
        padding-block: 4px;
        padding-inline: 28px;
        border-radius: calc(infinity * 1px);
        border: 1px solid rgb(255 255 255 / 0.08);
        backdrop-filter: blur(10px);
        transform: translateX(-50%);
    }
    nav a {
        opacity: .76;
        font-size: 14px;
        padding: 10px;
        font-weight: 400;
        color: #dadada;
        line-height: 1em;
    }
    nav a:hover {
        opacity: 1;
        color: #ffffff;
        text-shadow: 0 0 12px #ffffff;
    }
    nav a[aria-current="page"] {
        opacity: 1;
        color: #ffffff;
    }
</style>