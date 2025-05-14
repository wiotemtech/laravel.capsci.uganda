<script>
export default {
    name: "SickleCellGallery",
    data() {
        return {
            isDarkMode: false,
            images: [
                { src: "/assets/images/11.jpg", alt: "Gallery Image 1" },
                { src: "/assets/images/new.jpeg", alt: "Gallery Image 2" },
                { src: "/assets/images/12.jpg", alt: "Gallery Image 3" },
                { src: "/assets/images/12.jpg", alt: "Gallery Image 4" },
                { src: "/assets/images/14.jpg", alt: "Gallery Image 5" },
                { src: "/assets/images/15.jpg", alt: "Gallery Image 6" },
                { src: "/assets/images/17.jpg", alt: "Gallery Image 7" },
                { src: "/assets/images/18.jpg", alt: "Gallery Image 8" },
                { src: "/assets/images/9.jpg", alt: "Gallery Image 9" },
                { src: "/assets/images/4.jpg", alt: "Gallery Image 10" },
                { src: "/assets/images/16.jpg", alt: "Gallery Image 11" },
            ],
        };
    },
    methods: {
        openModal(imageSrc) {
            console.log("Opening modal with image:", imageSrc);
        },
    },
};
</script>

<template>
    <div class="main-content" :class="{ 'dark-theme-body': isDarkMode }">
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/14.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Our Gallery Page</h1>
                <!-- <p style="font-weight: bold; color: red">
                    "Leave No One Behind"
                </p>-->
            </div>
        </section>

        <section
            class="main-content2"
            :class="{ 'dark-theme-events': isDarkMode }"
        >
            <div class="container">
                <div class="row g-4">
                    <div
                        v-for="(image, index) in images"
                        :key="index"
                        class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in"
                    >
                        <div
                            class="gallery-item"
                            data-bs-toggle="modal"
                            data-bs-target="#lightboxModal"
                            @click="openModal(image.src)"
                        >
                            <img :src="image.src" :alt="image.alt" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>
.container {
    margin-bottom: 30px;
}

.landing-section {
    position: relative;
    background-size: cover;
    background-position: center;
    height: 40vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;

    animation: fadeIn 1.5s ease-in;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
    border-radius: 0 0 20px 20px;
}

.landing-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 120px;
    text-align: center;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    animation: slideDown 1s ease;
}

.tagline {
    font-weight: bold;
    font-size: 20px;
    color: red;
}

body.dark-theme-body .main-content2 {
    background-color: #222;
    color: red;
}

.gallery h2 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: red;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    transition:
        transform 0.3s ease-in-out,
        box-shadow 0.3s ease-in-out;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    transition:
        transform 0.3s ease-in-out,
        opacity 0.3s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
}

.gallery-item:hover img {
    transform: scale(1.1);
    opacity: 0.8;
}

.fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s ease-in-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
