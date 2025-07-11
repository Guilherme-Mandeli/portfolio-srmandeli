import { onMounted, onBeforeUnmount } from 'vue';

export function useHeroEffects() {
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

}
