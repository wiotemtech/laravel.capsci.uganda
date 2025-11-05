<template>
    <div :class="{ 'dark-theme': isDarkMode }">
        <div class="landing-container">
            <div class="zoom-slide"></div>

            <div class="overlay-content">
                <div style="margin-top: 109px;" class="overlay-text-wrapper">
                    <h2>/ Gallery</h2>
                    <h1>welcome to our gallery page</h1>
                </div>
            </div>
        </div>

        <div class="main-content" :class="{ 'dark-theme-body': isDarkMode }">
            <div class="contact-head">
                <h1 class="about-us-title">Visual Stories</h1>
                <h2 class="about-us-subtitle">Shared moments and memories.</h2>
            </div>

            <section class="gallery-section">
                <div class="gallery-grid">
                    <div
                        v-for="(image, index) in images"
                        :key="index"
                        class="gallery-col"
                    >
                        <div class="gallery-item" @click="openModal(index)">
                            <img
                                :src="image.src"
                                :alt="image.alt"
                                class="gallery-image"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <div
                v-if="showModal"
                class="image-modal-overlay"
                @click.self="closeModal"
            >
                <div class="image-modal-content">
                    <span
                        class="image-modal-close"
                        @click="closeModal"
                        title="Close"
                        >&times;</span
                    >

                    <button
                        class="nav-arrow prev"
                        @click.stop="prevImage"
                        title="Previous Image"
                    >
                        &#10094;
                    </button>

                    <img
                        :src="currentImage.src"
                        :alt="currentImage.alt"
                        class="enlarged-image"
                    />

                    <button
                        class="nav-arrow next"
                        @click.stop="nextImage"
                        title="Next Image"
                    >
                        &#10095;
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SickleCellGallery",
    data() {
        return {
            isDarkMode: false,
            images: [
                { src: "/assets/images/16.jpg", alt: "Gallery Image 1" },
                { src: "/assets/images/12.jpg", alt: "Gallery Image 2" },
                { src: "/assets/images/10.jpg", alt: "Gallery Image 3" },
                { src: "/assets/images/17.jpg", alt: "Gallery Image 4" },
                { src: "/assets/images/18.jpg", alt: "Gallery Image 5" },
                { src: "/assets/images/4.jpg", alt: "Gallery Image 6" },
                { src: "/assets/images/7.jpg", alt: "Gallery Image 7" },
                { src: "/assets/images/oj.jpeg", alt: "Gallery Image 8" },
                { src: "/assets/images/cp.jpeg", alt: "Gallery Image 9" },
                { src: "/assets/images/dd.jpg", alt: "Gallery Image 10" },
                { src: "/assets/images/12.jpg", alt: "Gallery Image 11" },
                { src: "/assets/images/run.jpeg", alt: "Gallery Image 12" },
                { src: "/assets/images/new.jpeg", alt: "Gallery Image 13" },
                { src: "/assets/images/about.jpg", alt: "Gallery Image 14" },
                { src: "/assets/images/10.jpg", alt: "Gallery Image 15" },
                { src: "/assets/images/11.jpg", alt: "Gallery Image 16" },
            ],

            showPopup: false,
            shownOnce: false,
            hideTimeout: null,
            reappearTimeout: null,

            showModal: false,
            currentIndex: 0,
        };
    },
    computed: {
        currentImage() {
            return this.images[this.currentIndex] || { src: "", alt: "" };
        },
    },
    methods: {
        openModal(index) {
            this.currentIndex = index;
            this.showModal = true;

            document.body.style.overflow = "hidden";
        },

        closeModal() {
            this.showModal = false;

            document.body.style.overflow = "";
        },

        nextImage() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
        },

        prevImage() {
            this.currentIndex =
                (this.currentIndex - 1 + this.images.length) %
                this.images.length;
        },
        handleKeydown(event) {
            if (this.showModal) {
                if (event.key === "ArrowRight") {
                    this.nextImage();
                } else if (event.key === "ArrowLeft") {
                    this.prevImage();
                } else if (event.key === "Escape") {
                    this.closeModal();
                }
            }
        },

        showTweet() {
            if (!this.shownOnce) {
                this.showPopup = true;
                this.shownOnce = true;

                this.hideTimeout = setTimeout(() => {
                    this.showPopup = false;

                    this.reappearTimeout = setTimeout(() => {
                        this.showPopup = true;
                    }, 10000);
                }, 10000);
            }
        },
        dismissPopup() {
            this.showPopup = false;
            clearTimeout(this.hideTimeout);
            clearTimeout(this.reappearTimeout);
        },
    },
    mounted() {
        setTimeout(this.showTweet, 5000);
        if (!window.twttr) {
            const twitterScript = document.createElement("script");
            twitterScript.setAttribute(
                "src",
                "https://platform.twitter.com/widgets.js",
            );
            twitterScript.setAttribute("async", "");
            twitterScript.setAttribute("charset", "utf-8");
            document.head.appendChild(twitterScript);
        } else if (
            window.twttr &&
            typeof window.twttr.widgets !== "undefined" &&
            typeof window.twttr.widgets.load === "function"
        ) {
            window.twttr.widgets.load();
        }

        window.addEventListener("keydown", this.handleKeydown);
    },
    beforeUnmount() {
        clearTimeout(this.hideTimeout);
        clearTimeout(this.reappearTimeout);

        window.removeEventListener("keydown", this.handleKeydown);

        document.body.style.overflow = "";
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body,
html {
    height: 100%;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.landing-container {
    position: relative;
    margin-top: -130px;
    height: 75vh;
    animation: fadeIn 1.5s ease-in;
    overflow: hidden;

    background: rgba(0, 0, 0, 0.65);
    z-index: 0;
}

.zoom-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    background-image: url("/public/assets/images/run.jpeg");
    background-position: center;
    background-size: cover;
    animation: zoomEffect 15s ease-in-out infinite alternate;

    z-index: -1;
}

@keyframes zoomEffect {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.4);
    }
}

@keyframes slideUp {
    0% {
        opacity: 0;

        transform: translate(-50%, -40%);
    }
    100% {
        opacity: 1;

        transform: translate(-50%, -50%);
    }
}

.overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    color: white;
    z-index: 2;
    padding: 20px;
    width: 90%;

    text-align: left;

    opacity: 0;
    transform: translate(-50%, -50%);
    animation: slideUp 1.2s ease-out 0.8s forwards;
}

.overlay-text-wrapper {
    line-height: 1.5;
}

.overlay-content h1 {
    font-size: 60px;
    text-shadow: 0 4px 10px rgba(0, 0, 0, 0.7);
    margin-bottom: 10px;
    font-weight: bold;
}
.overlay-content h2:first-of-type {
    margin-bottom: 6px;
}
.overlay-content h2:last-of-type {
    line-height: 1.4;
    padding-left: 15px;
    margin-top: 15px;
}

@media (max-width: 768px) {
    .overlay-content h1 {
        font-size: 2.8rem;
    }
    .overlay-content h2 {
        font-size: 1rem;
    }
    .overlay-content {
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        text-align: center;
    }
}

.contact-head {
    text-align: center;
    padding: 40px 20px 20px;
}

.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: red;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2.5rem;
    font-weight: bold;
    color: rgba(128, 0, 0, 0.8);
    line-height: 1.2;
    margin-bottom: 20px;
}

.gallery-section {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

@media (min-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (min-width: 992px) {
    .gallery-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.gallery-item {
    position: relative;
    overflow: hidden;
    height: 250px;
    transition:
        transform 0.3s ease-in-out,
        box-shadow 0.3s ease-in-out;
    cursor: pointer;
    background-color: #eee;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition:
        transform 0.3s ease-in-out,
        opacity 0.3s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

.gallery-item:hover .gallery-image {
    transform: scale(1.1);
    opacity: 0.8;
}

.image-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2000;
}

.image-modal-content {
    position: relative;
    max-width: 95vw;
    max-height: 95vh;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
}

.enlarged-image {
    max-width: 100%;
    max-height: 100%;
    display: block;
    object-fit: contain;
    transition: opacity 0.3s ease;
}

.image-modal-close {
    position: absolute;
    top: -25px;
    right: -25px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    z-index: 2002;
    transition: color 0.2s ease-in-out;
    background: #0d6efd;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    line-height: 40px;
    text-align: center;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

.image-modal-close:hover {
    color: #ff0000;
    background: #084298;
}

.nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    padding: 16px 12px;
    color: white;
    font-weight: bold;
    font-size: 30px;
    transition: 0.3s ease;
    user-select: none;
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    z-index: 2001;
    outline: none;
    height: 100%;
    display: flex;
    align-items: center;
}

.prev {
    left: 0;
    border-radius: 0;
}

.next {
    right: 0;
    border-radius: 0;
}

.nav-arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
</style>
