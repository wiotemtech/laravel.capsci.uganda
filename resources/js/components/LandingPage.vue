<template>
    <div class="playyon-page-container">
        <section class="playyon-hero-section" :style="heroBackgroundStyle">
            <div class="dark-overlay-extra"></div>

            <div class="hero-content-container">
                <div class="hero-text-box">
                    <h1 class="hero-title">
                        <span
                            style="color: white"
                            class="hero-line new-title-font"
                        >
                            Catherine Phill
                            <span style="color: red">Sickle cell</span>
                        </span>
                        <span
                            style="color: white"
                            class="hero-line new-title-font"
                        >
                            Support Initiative (Capsci-ug)</span
                        >
                    </h1>

                    <div class="subtitle-wrapper">
                        <h5 class="hero-subtitle">
                            {{ currentSubtitle }}
                        </h5>

                        <a href="#" class="btn btn-donate">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>Donate Now</span>
                        </a>
                    </div>

                    <div class="decorative-text"></div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";

const heroImages = ref([
    "/assets/images/s.jpg",
    "/assets/images/17.jpg",
    "/assets/images/new.jpeg",
]);

const heroSubtitles = ref([
    "Expert training, relentless determination, and boundless compassion.",
    "Empowering warriors, advocating for change, building a better future.",
    "Screening, counseling, and support: Integrated Sickle Cell services.",
]);

const currentImageIndex = ref(0);
let intervalId = null;

const currentSubtitle = computed(() => {
    return heroSubtitles.value[currentImageIndex.value];
});

const heroBackgroundStyle = computed(() => ({
    backgroundImage: `url(${heroImages.value[currentImageIndex.value]})`,
}));

const startSlideshow = () => {
    intervalId = setInterval(() => {
        currentImageIndex.value =
            (currentImageIndex.value + 1) % heroImages.value.length;
    }, 7000);
};

onMounted(startSlideshow);
onUnmounted(() => clearInterval(intervalId));
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Anton&family=Bebas+Neue&display=swap");

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.playyon-page-container {
    font-family: "Arial", sans-serif;
    color: var(--color-dark);
    margin-top: -130px;
}

a {
    text-decoration: none;
    color: inherit;
}

/* --- Hero Section --- */
.playyon-hero-section {
    height: 100vh;
    min-height: 600px;
    background-color: var(--color-dark);
    position: relative;
    overflow: hidden;
    display: flex;
    margin-top: 18px;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--color-light);

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    animation: scale-zoom 10s infinite alternate ease-in-out;
    transition: background-image 1.5s ease-in-out;
}

@keyframes scale-zoom {
    0% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

/* --- Overlays --- */
.playyon-hero-section::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 1;
    background: rgba(0, 0, 0, 0.531);
}

.dark-overlay-extra {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 2;
}

.hero-content-container {
    position: relative;
    z-index: 5;
    max-width: 800px;
    padding: 20px;
    margin-top: 300px;
}

.hero-text-box {
    padding: 40px;
}

.hero-title {
    font-family: "Archivo Black", sans-serif;
    position: relative;
    z-index: 6;
    font-weight: bolder;
    margin-bottom: 0.8rem;
    line-height: 1.2;
    color: red;
    text-shadow: 1px 1px 1px rgba(244, 242, 242, 0.9);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.hero-title .new-title-font {
    font-family: "Anton", sans-serif;
    font-weight: normal;
    letter-spacing: 0.1em;
}

.hero-title .hero-line {
    display: block;
    font-size: clamp(2.5rem, 8vw, 6rem);
    white-space: nowrap;
}

.subtitle-wrapper {
    background-color: rgba(128, 0, 0, 0.8);
    padding: 10px 20px;
    margin-bottom: 30px;
    border-radius: 8px;
    z-index: 6;
    position: relative;
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    max-width: 100%;
    text-align: center;
}

.hero-subtitle {
    font-size: clamp(1.2rem, 3vw, 2.2rem);
    font-weight: 700;
    margin: 0;
    padding-bottom: 10px;
    color: #fff;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.9);
    transition: opacity 0.5s ease-in-out;
}

.btn {
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition:
        background-color 0.3s,
        transform 0.2s;
}

.btn-donate {
    background-color: white;
    color: #800000;
    border: 2px solid #800000;
    margin-top: 10px;
}

.btn-donate:hover {
    background-color: #800000;
    color: white;
    transform: translateY(-2px);
}

.decorative-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(0deg);
    font-size: clamp(3rem, 10vw, 8rem);
    font-weight: 900;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: transparent;
    -webkit-text-stroke: 2px white;
    text-stroke: 2px white;
    white-space: nowrap;
    z-index: 3;
    user-select: none;
    pointer-events: none;
    text-align: center;
}

@media (max-width: 767px) {
    .hero-content-container {
        width: 90%;
        padding: 0 10px;
        margin: 200px auto 0;
    }

    .hero-title .hero-line {
        white-space: normal;
        text-align: center;
    }

    .subtitle-wrapper {
        display: flex;
        flex-direction: column;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .subtitle-wrapper .btn-donate {
        width: 100%;
        max-width: 300px;
        margin: 10px auto 0;
    }

    .playyon-hero-section {
        margin-top: 130px;
    }
}

@media (max-width: 500px) {
    .decorative-text {
        white-space: normal;
        line-height: 1.1;
        letter-spacing: 0.05em;
        font-size: clamp(2rem, 10vw, 4rem);
        padding: 0 10px;
    }
}
</style>
