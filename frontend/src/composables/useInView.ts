import { ref, onMounted, onUnmounted, type Ref } from 'vue'

/**
 * Observes when an element is at least 50% in the viewport.
 *
 * @param elementRef - Reference to the DOM element to observe.
 * @returns A Ref<boolean> indicating whether the element is visible.
 */
export function useInView(
    elementRef: Ref<Element | null>,
    options: {
        threshold?: number
        rootMargin?: string
    } = {}
): Ref<boolean> {
    const isVisible = ref(false)
    let observer: IntersectionObserver | null = null

    const handleIntersect: IntersectionObserverCallback = (entries) => {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                isVisible.value = true
                if (observer) {
                    observer.unobserve(entry.target)
                }
            }
        }
    }

    onMounted(() => {
        if (elementRef.value) {
            observer = new IntersectionObserver(handleIntersect, {
                threshold: options.threshold ?? 0,
                rootMargin: options.rootMargin ?? '-50% 0px -50% 0px',
            })
            observer.observe(elementRef.value)
        }
    })

    onUnmounted(() => {
        if (observer && elementRef.value) {
            observer.unobserve(elementRef.value)
        }
    })

    return isVisible
}
