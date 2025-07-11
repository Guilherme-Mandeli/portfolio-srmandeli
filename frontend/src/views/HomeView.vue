<template>
    <section class="hero">
      
        <div class="row effect_wrapper">
            <div class="hero-effect">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-4"></div>
            </div>
            <div class="logo_wrapper"><img src="@/assets/images/logo-srmandeli-full-white.svg" alt="Logo"></div>
        </div>
        <div class="row dynamic-row relative text-center">
            <div class="available_wrapper text-2 leading-2">
              <div class="available-circle"></div>
              <span>Disponible para oportunidades</span>
            </div>
            <h1 class="text-11 leading-11 font-semibold mb-2 text-white" style="text-shadow: 0 0 12px #08182233;">Guilherme Mandeli</h1>
            <p class="text-6 leading-6 text-white mb-10" style="text-shadow: 0 0 12px #08182233;">Full Stack Web Developer • UX/UI Specialist</p>
            <div>
              <DefaultLink href="#" class="px-6 py-2 mx-2 border border-white text-white bg-transparent rounded-full hover:bg-white hover:text-black transition duration-300">
                  Hablemos
              </DefaultLink>
              <DefaultLink href="#" class="px-6 py-2 mx-2 border border-white text-white bg-transparent rounded-full hover:bg-white hover:text-black transition duration-300">
                  Ver Proyectos
              </DefaultLink>
            </div>
        </div>
    </section>

    
    <section class="about dynamic-container z-10 block relative">
        <div class="row dynamic-row">
            <FadeUp><h2 class="text-9 leading-9 font-semibold my-4">El problema nunca es el código.</h2></FadeUp>
            <FadeUp><p class="text-9 leading-9">Es todo lo que viene antes.</p></FadeUp>
        </div>
    </section>
</template>

<!-- Script Setup-->
<script lang="ts" setup>
import { useHeroEffects } from "@/composables/useHeroEffects.ts";
import DefaultLink from '@/components/DefaultLink.vue';

import FadeUp from '@/components/animations/FadeUp.vue';

// Hero
useHeroEffects()

defineOptions({ name: 'HomeView' });
</script>

<!-- Hero Effects -->
 <script>

</script>

<!-- HERO -->
<style scoped>
    .hero {
        position: relative;
        width: 100%;
        height: calc(100svh + 60px);
        margin-bottom: -160px;
        background: linear-gradient(#02686c 0%, #091923 100%);
        background-size: cover;

        &::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url(@/assets/images/hero-bg.avif);
            background-size: cover;
            background-position: top center;
            opacity: 0.2;
            mix-blend-mode: color-dodge;
            z-index: 0;
            pointer-events: none;
            animation: flicker 10s infinite;
        }

        &::after {
          content: "";
          position: absolute;
          inset: 0;
          background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Crect width='20' height='20' fill='white'/%3E%3Ccircle cx='10' cy='10' r='1' fill='black'/%3E%3C/svg%3E");
          background-size: 6px 11px;
          opacity: 0.008;
          pointer-events: none;
          background-position: 0 0;
          animation: static 0.1s steps(10) infinite;
          -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
          mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
        }

        & .row.effect_wrapper {
            position: sticky;
            top: calc(32svh - 60px);
            z-index: 0;
        }
    }

    @keyframes static {
      0% { background-position: 0 0; }
      100% { background-position: 100% 100%; }
    }

    @keyframes flicker {
      0%      { opacity: 0.2; }
      1%      { opacity: 0.4; }
      1.001%  { opacity: 0.2; }
      10%     { opacity: 0.2; }
      11.001% { opacity: 0.4; }
      11.002% { opacity: 0.2; }
      12%     { opacity: 0.4; }
      39.999% { opacity: 0.2; }
      40%     { opacity: 0.2; }
      41%     { opacity: 0.4; }
      41.001% { opacity: 0.2; }
      75%     { opacity: 0.2; }
      75.5%   { opacity: 0.2; }
      75.501% { opacity: 0.4; }
      80%     { opacity: 0.2; }
      81.001% { opacity: 0.4; }
      82%     { opacity: 0.4; }
      82.001% { opacity: 0.4; }
      82.002% { opacity: 0.2; }
      83%     { opacity: 0.4; }
      83.001% { opacity: 0.2; }
      83.002% { opacity: 0.4; }
      83.003% { opacity: 0.2; }
      88%     { opacity: 0.4; }
    }

    .hero-effect {
        position: absolute;
        top: calc(-32svh - 60px);
        background-color: #081822;
        width: 100%;
        height: calc(100svh + 160px);
        overflow: hidden;
        box-shadow: inset 0 0 210px #081822;
        pointer-events: none;
        animation: hideBgColor 5s forwards;
        
        &::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(#23616f 0%, rgb(8 24 34) 100%), url(/src/assets/images/sunset-bg-1920x820.avif);
            background-size: cover;
            background-position: center;
            opacity: 0.08;
            background-blend-mode: color-burn;
            pointer-events: none;
        }
        
        &::after {
            content: "";
            position: absolute;
            bottom: 0;
            background-image: linear-gradient(transparent, #081822 103svh);
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
    }

    @keyframes hideBgColor {
      0% { background-color: #081822; }
      100% { background-color: transparent; }
    }

    .hero-effect .circle {
        position: absolute;
        left: 50%;
        top: calc(32svh + 225px);
        background-image: linear-gradient(180deg,rgba(0, 170, 176, 0.33) 0%, transparent 100%);
        border-radius: calc(infinity * 1px);
        box-shadow:
            inset -1px -1px 1px #1b777aa6,
            inset -6px 4px 40px #188084,
            inset 1px 1px 1px #00aab0bd,
            inset 6px 4px 40px #00aab045;
        transform:
            translate(
                var(--hero-effect-circle-transition-x),
                var(--hero-effect-circle-transition-y)
            )
            scale(var(--hero-effect-circle-scale));
        border: 1px solid rgba(0, 170, 176, 0.4);
        opacity: .42;
        backdrop-filter: blur(62px);
        will-change: transform;
        pointer-events: none;
        animation: flicker 10s infinite;
    }
    .hero-effect .circle-1 {
        width: 620px;
        height: 620px;
    }
    .hero-effect .circle-2 {
        width: 820px;
        height: 820px;
    }
    .hero-effect .circle-3 {
        width: 1020px;
        height: 1020px;
    }
    .hero-effect .circle-4 {
        width: 1220px;
        height: 1220px;
        box-shadow:
            0 0 800px 200px rgba(0, 170, 176, 0.66),
    }
    .logo_wrapper {
        width: 320px;
        height: 320px;
        margin-inline: auto;
        pointer-events: none;
    }

    @keyframes flickerLogo {
      0%      { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      1%      { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      1.001%  { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      10%     { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      11.001% { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      11.002% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      12%     { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      39.999% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      40%     { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      41%     { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      41.001% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      75%     { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      75.5%   { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      75.501% { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      80%     { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      81.001% { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      82%     { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      82.001% { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      82.002% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      83%     { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      83.001% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      83.002% { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
      83.003% { opacity: 0.32; filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44)); }
      88%     { opacity: 0.2; filter: drop-shadow(0 0 0px #ffffff) drop-shadow(0 0 0px rgba(255, 255, 255, 0.44)); }
    }

    .logo_wrapper img {
      opacity: 0.32;
      filter: drop-shadow(0 0 8px #ffffff) drop-shadow(0 0 24px rgba(255, 255, 255, 0.44));
      animation: flickerLogo 10s infinite;
      pointer-events: none;
      user-select: none;
    }

    .available_wrapper {
      background-color: rgba(8, 24, 34, .8);
      padding: 6px 16px;
      width: fit-content;
      margin-inline: auto;
      margin-bottom: 20px;
      border-radius: 12px;
    }
    .available-circle {
      display: inline-block;
      position: relative;
      width: 8px;
      height: 8px;
      margin-right: 12px;
      background-color: #44c250;
      border-radius: 50%;

      &::after {
        content: "";
        position: absolute;
        left: 0;
        width: 8px;
        height: 8px;
        background-color: #44c251;
        border-radius: 50%;
        animation: pulse 1.5s infinite;
      }
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 0.6;
      }
      70% {
        transform: scale(3);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 0;
      }
    }

    .about .row {
        background-color: #081822;
        border-radius: 24px;
    }
</style>

<!-- Chapter 1-->
<style scoped>

</style>