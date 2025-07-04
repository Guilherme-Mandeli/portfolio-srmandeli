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
    </section>
</template>

<script lang="ts">
export default {
    name: 'HomeView'
};

</script>

<style scoped>
    .hero {
        position: relative;
        width: 100%;
        height: calc(100svh + 60px);
        margin-bottom: -160px;
        background: linear-gradient(#226371 0%, #091923 100%);
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
        }
        &::after {
            content: "";
            position: absolute;
            bottom: 0;
            background-image: linear-gradient(transparent 3%, #081822 97%);
            width: 100%;
            height: 100%;
            box-shadow: 0 0 0 500px #081822;
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
        height: calc(100svh + 60px);
        overflow: hidden;
        box-shadow: inset 0 0 210px #081822;
        
        &::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(#23616f 0%, rgb(8 24 34) 100%), url(/src/assets/images/sunset-bg-1920x820.avif);
            background-size: cover;
            background-position: center;
            opacity: 0.05;
            background-blend-mode: color-burn;
        }
    }
    .hero-effect .circle {
        position: absolute;
        left: 50%;
        top: 50%;
        background-image: linear-gradient(180deg,rgba(11, 25, 3, 0.12) 0%, transparent 100%);
        border-radius: calc(infinity * 1px);
        box-shadow:
            inset -1px -1px 1px #1b777aa6,
            inset -6px 4px 40px #18808494,
            inset 1px 1px 1px #00aab0bd,
            inset 6px 4px 40px #00aab045;
        transform: translate(-50%, -50%);
        border: 1px solid rgba(0, 170, 176, 0.388);
        opacity: .4;
        backdrop-filter: blur(62px);
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
    }
    .mask-logo {
        width: 320px;
        height: 320px;
        margin-inline: auto;
        background-image: radial-gradient(rgb(255 255 255 / .02), rgb(255 255 255 / .16));
        mask-image: url(@/assets/images/logo-srmandeli-full-white.svg);
    }

    .about .row {
        background-color: #081822;
        border-radius: 24px;
    }
</style>
