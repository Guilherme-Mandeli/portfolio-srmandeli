<template>
    <section class="hero">
        <div class="row">
            <div class="hero-effect">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-4"></div>
            </div>
            <div class="mask-logo"></div>
        </div>
    </section>
    
    <section class="about dynamic-container z-10 block relative">
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
    </section>
</template>

<script lang="ts" setup>
import { onMounted, onBeforeUnmount } from 'vue';

/* —————————————————————————————
   1) Configuración y estado
   ————————————————————————————— */
const root = document.documentElement;

let viewport = {
  width: window.innerWidth,
  height: window.innerHeight,
  maxScrollY: window.innerHeight * 1.20
};

let mouse = {
  targetX: -1,
  targetY: -1,
  currentX: -1,
  currentY: -1
};

let rafId: number | null = null;
let lastTime = 0;

const CONFIG = {
  rangeMin: -30,
  rangeMax: -70,
  maxDist2: 0.5,
  fps: 40,
  frameDuration: 1000 / 40,
  lerpSpeed: 0.1,
  lerpEpsilon: 0.1,
  minScale: 0.9,
  maxScale: 1.25,
  breakpoint: 981
};

/* —————————————————————————————
   2) Lógica pura de cálculo
   ————————————————————————————— */
function updateEffects(x: number, y: number) {
  const rx = x / viewport.width;
  const ry = y / viewport.height;
  const posX = CONFIG.rangeMin + (CONFIG.rangeMax - CONFIG.rangeMin) * rx;
  const posY = CONFIG.rangeMin + (CONFIG.rangeMax - CONFIG.rangeMin) * ry;

  const dx = rx - 0.5;
  const dy = ry - 0.5;
  const dist2 = dx * dx + dy * dy;
  const norm = Math.min(1, dist2 / CONFIG.maxDist2);

  const scale =
    CONFIG.minScale + (CONFIG.maxScale - CONFIG.minScale) * norm;

  root.style.setProperty(
    '--hero-effect-circle-transition-x',
    `${posX.toFixed(3)}%`
  );
  root.style.setProperty(
    '--hero-effect-circle-transition-y',
    `${posY.toFixed(3)}%`
  );
  root.style.setProperty(
    '--hero-effect-circle-scale',
    scale.toFixed(3)
  );
}

function animate(now = performance.now()) {
  const elapsed = now - lastTime;
  if (elapsed >= CONFIG.frameDuration) {
    lastTime = now;

    const dx = mouse.targetX - mouse.currentX;
    const dy = mouse.targetY - mouse.currentY;

    mouse.currentX += dx * CONFIG.lerpSpeed;
    mouse.currentY += dy * CONFIG.lerpSpeed;

    updateEffects(mouse.currentX, mouse.currentY);

    if (
      Math.abs(dx) < CONFIG.lerpEpsilon &&
      Math.abs(dy) < CONFIG.lerpEpsilon
    ) {
      rafId = null;
      return;
    }
  }

  rafId = requestAnimationFrame(animate);
}

/* —————————————————————————————
   3) Handlers y listeners
   ————————————————————————————— */
function onMouseMove(e: MouseEvent) {
  if (
    window.scrollY > viewport.maxScrollY ||
    window.innerWidth < CONFIG.breakpoint
  ) {
    return;
  }
  mouse.targetX = e.clientX;
  mouse.targetY = e.clientY;

  if (rafId === null) {
    mouse.currentX = mouse.targetX;
    mouse.currentY = mouse.targetY;
    lastTime = performance.now();
    animate();
  }
}

function onResize() {
  viewport.width = window.innerWidth;
  viewport.height = window.innerHeight;
  viewport.maxScrollY = window.innerHeight * 1.20;
}

function onVisibilityChange() {
  if (document.hidden && rafId !== null) {
    cancelAnimationFrame(rafId);
    rafId = null;
  }
}

/* —————————————————————————————
   Montaje y limpieza
   ————————————————————————————— */
function addListeners() {
  window.addEventListener('mousemove', onMouseMove, { passive: true });
  window.addEventListener('resize', onResize, { passive: true });
  document.addEventListener('visibilitychange', onVisibilityChange);
}

function removeListeners() {
  window.removeEventListener('mousemove', onMouseMove);
  window.removeEventListener('resize', onResize);
  document.removeEventListener('visibilitychange', onVisibilityChange);
  if (rafId !== null) {
    cancelAnimationFrame(rafId);
    rafId = null;
  }
}

onMounted(addListeners);
onBeforeUnmount(removeListeners);

defineOptions({ name: 'HomeView' });
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
            background: url(@/assets/images/hero-bg.avif);
            background-size: cover;
            background-position: top center;
            opacity: 0.24;
            mix-blend-mode: color-dodge;
            z-index: 0;
            pointer-events: none;
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
        pointer-events: none;
        
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
            box-shadow: 0 0 0 500px #081822;
            pointer-events: none;
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
        will-change: transform;
        pointer-events: none;
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
        mask-image: url(@/assets/images/logo-srmandeli-full-white.svg);
        /* background-image: url(@/assets/images/Logo_SrMandeli.svg); */
        pointer-events: none;
    }

    .about .row {
        background-color: #081822;
        border-radius: 24px;
    }
</style>
