<script>
export default {
    name: "LandingPage",
    props: {
        isDarkMode: Boolean,
    },
    data() {
        return {
            images: ["14.jpg", "s.jpg", "dd.jpg"],
            texts: [
                `GIVE HOPE SAVES LIVES <br> "LEAVE NO ONE BEHIND"`,
                `"COMBATING SICKLE CELL DISEASE" <br> "the best way"`,
                `"UHURU SICKLE CELL" <br> "RUN 2025 "`,
            ],
            currentIndex: 0,
            textVisible: true,
        };
    },
    mounted() {
        setInterval(this.changeContent, 5000);
    },
    methods: {
        changeContent() {
            this.textVisible = false;
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            setTimeout(() => {
                this.textVisible = true;
            }, 100);
        },
    },
};
</script>

<template>
    <div class="landing-page" :class="{ 'dark-theme-landing': isDarkMode }">
        <div class="image-container">
            <img
                v-for="(img, index) in images"
                :key="index"
                :src="`/assets/images/${img}`"
                :alt="`Image ${index + 1}`"
                :class="{ active: currentIndex === index }"
            />
            <div
                class="text-overlay"
                :class="{ show: textVisible, 'dark-theme-text': isDarkMode }"
                v-html="texts[currentIndex]"
            ></div>
        </div>

        <div class="card-section">
            <div class="card" :class="{ 'dark-theme-card': isDarkMode }">
                <img
                    src="/public/assets/images/logo1.jpg"
                    alt=""
                    style="width: 50px; height: 50px; border-radius: 33px"
                />
                <h3 id="kk" :class="{ 'dark-theme-heading': isDarkMode }">
                    CATHERIN PHILL SICKLE CELL INITIATIVE <br />
                    "LEAVE NO ONE BEHIND"
                </h3>
            </div>
            <div class="card" :class="{ 'dark-theme-card': isDarkMode }">
                <h3 :class="{ 'dark-theme-heading': isDarkMode }">
                    INTRODUCING UHURU SICKLE CELL RUN 2025
                </h3>
                <p :class="{ 'dark-theme-paragraph': isDarkMode }">
                    THEME:<br />Running for awareness, together against sickle
                    cell
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.landing-page {
    width: 100%;
    margin-top: 80px;
    position: relative;
    overflow: hidden;
    background: #f2f2f2;
    font-family: Arial, sans-serif;
    transition: background-color 0.3s ease;
}

body.dark-theme-body .landing-page {
    background: #222;
}

.image-container {
    width: 100%;
    height: 60vh;
    position: relative;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 60vh;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
    z-index: 0;
}

.image-container img.active {
    opacity: 1;
    z-index: 1;
}

.text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -40%);
    color: white;
    font-size: clamp(1.5rem, 4vw, 3rem);
    text-align: center;
    opacity: 0;
    z-index: 2;
    transition:
        opacity 0.8s ease-in-out,
        transform 0.8s ease-in-out,
        color 0.3s ease;
    line-height: 1.4;
    font-weight: bold;
}

.text-overlay.show {
    opacity: 1;
    transform: translate(-50%, -50%);
}

body.dark-theme-body .text-overlay {
    color: white;
}

.card-section {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-top: -6rem;
    position: relative;
    z-index: 3;
    padding: 2rem;
    flex-wrap: wrap;
}

.card {
    background: white;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
    transition:
        transform 0.3s ease,
        background-color 0.3s ease,
        color 0.3s ease;
    position: relative;
}

body.dark-theme-body .card {
    background: #222;
    border: 1px solid red;
    color: #333;
}

.card:hover {
    transform: translateY(-10px);
}

.card h3 {
    margin-bottom: 0.5rem;
    font-size: 20px;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease;
}

body.dark-theme-body .card h3 {
    color: white;
}

.card p {
    font-size: 20px;
    color: red;
    font-weight: bold;
    transition: color 0.3s ease;
}

body.dark-theme-body .card p {
    color: red;
}
</style>
