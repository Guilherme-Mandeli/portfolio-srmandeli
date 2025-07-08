<template>
    <section class="wrapper">
        <div class="hero">
            <div class="row">
                <div class="hero-effect">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                    <div class="circle circle-4"></div>
                </div>
                <div class="mask-logo"></div>
            </div>
        </div>

        <div class="about dynamic-container z-10 block relative">
            <div class="row dynamic-row">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
            </div>
            <div class="row dynamic-row">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
            </div>
            <div class="row dynamic-row">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
                <br />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti dolore eius blanditiis rem dolores error nostrum voluptatum eveniet? Perferendis inventore sit vitae facere doloribus! Quas pariatur ipsam fugiat ea?</p>
            </div>
        </div>
    </section>
</template>

<script lang="ts" setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const lastMouseX = ref<number>(-1);
const lastMouseY = ref<number>(-1);
const viewportWidth = ref(0);
const viewportHeight = ref(0);
let throttleTimeout: number | null = null;

const THROTTLE_DELAY = 50; // Milisegundos

/**
 * Calcula y aplica las variables CSS optimizadas por posición de mouse.
 */
function applyMouseEffects(): void {
    const ratioX = lastMouseX.value / viewportWidth.value;
    const ratioY = lastMouseY.value / viewportHeight.value;

    const x = -30 + (-70 + 30) * ratioX;
    const y = -30 + (-70 + 30) * ratioY;

    const dx = ratioX - 0.5;
    const dy = ratioY - 0.5;
    const distance = Math.sqrt(dx * dx + dy * dy) / 0.707;

    const minScale = 0.9;
    const maxScale = 1.25;
    const scale = minScale + (maxScale - minScale) * distance;

    const root = document.documentElement;
    root.style.setProperty('--hero-effect-circle-transition-x', `${x}%`);
    root.style.setProperty('--hero-effect-circle-transition-y', `${y}%`);
    root.style.setProperty('--hero-effect-circle-scale', scale.toFixed(3));
}

/**
 * Retorna true si scrollY > 120svh.
 */
function isScrollInRange(): boolean {
    return window.scrollY <= window.innerHeight * 1.20;
}

/**
 * Controla el evento de mouse con throttle manual.
 */
function handleMouseMove(event: MouseEvent): void {
    if ( ! isScrollInRange() || window.innerWidth < 981 ) { return; }

    // Solo recalcula si el mouse realmente se movió bastante
    if (
        Math.abs(event.clientX - lastMouseX.value) < 3 &&
        Math.abs(event.clientY - lastMouseY.value) < 3
    ) {
        return;
    }

    lastMouseX.value = event.clientX;
    lastMouseY.value = event.clientY;

    // Throttle simple usando setTimeout
    if (throttleTimeout === null) {
        throttleTimeout = window.setTimeout(() => {
            applyMouseEffects();
            throttleTimeout = null;
        }, THROTTLE_DELAY);
    }
}

function handleResize(): void {
    viewportWidth.value = window.innerWidth;
    viewportHeight.value = window.innerHeight;
}

onMounted(() => {
    viewportWidth.value = window.innerWidth;
    viewportHeight.value = window.innerHeight;

    window.addEventListener('mousemove', handleMouseMove);
    window.addEventListener('resize', handleResize);
});

onBeforeUnmount(() => {
    window.removeEventListener('mousemove', handleMouseMove);
    window.removeEventListener('resize', handleResize);

    if (throttleTimeout !== null) {
        clearTimeout(throttleTimeout);
    }
});


defineOptions({
    name: 'HomePage'
});

</script>

<style scoped>
    .hero {
        position: relative;
        width: 100%;
        height: calc(100svh + 60px);
        margin-bottom: -160px;
        background: linear-gradient(#02686c 0%, #091923 100%);
        background-size: cover;
        background-position: top center;

        &::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url(~/assets/images/hero-bg.avif);
            background-size: cover;
            background-position: top center;
            opacity: 0.24;
            mix-blend-mode: color-dodge;
            z-index: 0;
        }

        & .row {
            position: sticky;
            top: calc(32svh - 60px);
            z-index: 0;
        }
    }
    .hero-effect {
        position: absolute;
        top: calc(-32svh - 60px);
        width: 100%;
        height: calc(100svh + 160px);
        overflow: hidden;
        box-shadow: inset 0 0 210px #081822;
        
        &::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(#23616f 0%, rgb(8 24 34) 100%), url(/assets/images/sunset-bg-1920x820.avif);
            background-size: cover;
            background-position: center;
            opacity: 0.08;
            background-blend-mode: color-burn;
        }
        
        &::after {
            content: "";
            position: absolute;
            bottom: 0;
            background-image: linear-gradient(transparent, #081822 103svh);
            width: 100%;
            height: 100%;
            box-shadow: 0 0 0 500px #081822;
        }
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
        transition: transform 0.25s ease-out;
        will-change: transform;
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
    .mask-logo {
        width: 320px;
        height: 320px;
        margin-inline: auto;
        background-color: rgb(255 255 255 / .22);
        mask-image: url(~/assets/images/logo-srmandeli-full-white.svg);
        /* background-image: url(@/assets/images/Logo_SrMandeli.svg); */
    }

    .about .row {
        background-color: #081822;
        border-radius: 24px;
    }
</style>
