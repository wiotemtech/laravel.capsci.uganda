<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import axios from "axios";

const blogs = ref([]);
const selectedBlog = ref(null);
const showPopup = ref(false);
let shownOnce = false;
let hideTimeout = null;
let reappearTimeout = null;

const fetchBlogs = async () => {
    try {
        const res = await axios.get("/api/blogs");
        blogs.value = res.data.blogs.data;
    } catch (error) {
        console.error(error);
    }
};

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleDateString();
};

const showModal = (blog) => {
    selectedBlog.value = blog;
};

const closeModal = () => {
    selectedBlog.value = null;
};

const showTweet = () => {
    if (!shownOnce) {
        showPopup.value = true;
        shownOnce = true;

        hideTimeout = setTimeout(() => {
            showPopup.value = false;

            reappearTimeout = setTimeout(() => {
                showPopup.value = true;
            }, 10000);
        }, 10000);
    }
};

const dismissPopup = () => {
    showPopup.value = false;
    clearTimeout(hideTimeout);
    clearTimeout(reappearTimeout);
};

onMounted(() => {
    fetchBlogs();
    setTimeout(showTweet, 5000);

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
});

onBeforeUnmount(() => {
    clearTimeout(hideTimeout);
    clearTimeout(reappearTimeout);
});
</script>

<template>
    <div class="oj">
        <div class="tweet-container" :class="{ show: showPopup }">
            <h1 class="follow">follow us on x</h1>
            <button class="close-btn" @click="dismissPopup">×</button>
            <blockquote class="twitter-tweet" data-width="280">
                <p lang="en" dir="ltr">
                    Integrated Sickle Cell services!<br />
                    Residents of Ayago, Apoi Subcounty in Apac Dist have tuned
                    up for sickle cell traits screening; we have collaborated
                    with Ayago Health Centre II to screen for Malaria, HIV,
                    Sphilys, H.pylori, HepB, RBS, and Hypertension.
                    <a href="https://twitter.com/cphluganda?ref_src=twsrc%5Etfw"
                        >@cphluganda</a
                    >
                    <a
                        href="https://twitter.com/TestandTreat37?ref_src=twsrc%5Etfw"
                        >@TestandTreat37</a
                    >
                    <a href="https://t.co/1eAO3W8bIn"
                        >pic.twitter.com/1eAO3W8bIn</a
                    >
                </p>
                &mdash; Catherine Phil Sickle Cell Support Initiative
                (@UgandaSickle)
                <a
                    href="https://twitter.com/UgandaSickle/status/1885259581686706531?ref_src=twsrc%5Etfw"
                    >January 31, 2025</a
                >
            </blockquote>
        </div>

        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/14.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Welcome to our Blogs page</h1>
            </div>
        </section>

        <div class="container">
            <div class="blog-list">
                <div
                    v-for="blog in blogs"
                    :key="blog.id"
                    class="blog-card"
                    @click="showModal(blog)"
                    :class="{ 'dark-theme-events': isDarkMode }"
                >
                    <img
                        v-if="blog.image"
                        :src="'/storage/' + blog.image"
                        class="blog-img"
                    />
                    <div>
                        <h3>{{ blog.title }}</h3>
                        <p>Published on: {{ formatDate(blog.created_at) }}</p>
                        <button class="read-more" @click.stop="showModal(blog)">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <div
                v-if="selectedBlog"
                class="modal-overlay"
                @click.self="closeModal"
            >
                <div class="modal-content">
                    <h2>{{ selectedBlog.title }}</h2>
                    <p>
                        <strong>Published:</strong>
                        {{ formatDate(selectedBlog.created_at) }}
                    </p>
                    <p class="description">{{ selectedBlog.description }}</p>
                    <button class="close" @click="closeModal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.oj {
    padding: 0;
}

.title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
    color: #343a40;
}

body.dark-theme-body .landing-section {
    background-color: #222;
    color: red;
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
    width: 100vw;
    max-width: 100vw;
    overflow: hidden;
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

.blog-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
    padding: 20px;
}

@media (min-width: 992px) {
    .blog-list {
        grid-template-columns: repeat(3, 1fr);
    }
}

.blog-card {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        background-color 0.3s ease;
    display: flex;
    flex-direction: column;
    cursor: pointer;
}

body.dark-theme-body .blog-card {
    background-color: #222;
    color: red;
}

.blog-card:hover {
    transform: translateY(-10px) scale(1.03);

    background: linear-gradient(135deg, #2c3e50 0%, #2c3e50 100%);
    color: white;
}

.blog-card:hover.read-more {
    color: white;
}

.blog-card:hover h3,
.blog-card:hover p {
    color: white;
}

.blog-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
    transition: filter 0.3s ease;
}

.blog-card:hover .blog-img {
    filter: brightness(0.8);
}

.blog-card > div {
    padding: 25px 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
}

.blog-card h3 {
    font-size: 1.75rem;
    color: #222;
    margin-bottom: 12px;
    font-weight: 700;
    transition: color 0.3s ease;
}

.blog-card p {
    font-size: 1rem;
    color: #495057;
    margin-bottom: 20px;
    transition: color 0.3s ease;
    line-height: 1.5;
}

.read-more {
    align-self: flex-start;
    padding: 10px 20px;
    border: 1px solid red;
    border-radius: 8px;
    font-weight: 600;
    /*box-shadow: 0 6px 12px rgba(13, 110, 253, 0.3);*/
    transition:
        background-color 0.3s ease,
        box-shadow 0.3s ease;

    color: #222;
    cursor: pointer;
}

.read-more:hover {
    background: white;

    box-shadow: 0 8px 18px rgba(8, 66, 152, 0.5);
}

.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-content {
    background: #394958;
    padding: 40px;
    max-width: 650px;
    border-radius: 8px;
    text-align: left;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    animation: fadeIn 0.3s ease-in-out;
}

.modal-content h2 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 15px;
    color: whitesmoke;
}

.modal-content p strong {
    font-weight: 600;
    color: whitesmoke;
}

.modal-content .description {
    margin: 25px 0;
    line-height: 1.7;
    color: whitesmoke;
    white-space: pre-line;
}

.close {
    padding: 10px 20px;
    max-width: 80px;

    color: white;
    border: 1px solid red;
    border-radius: 8px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: background-color 0.2s ease-in-out;
    margin-top: 20px;
}

.close:hover {
    background: red;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.97);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}

.follow {
    font-size: 22px;
    text-align: center;
    color: black;
    margin-bottom: 10px;
}

.tweet-container {
    position: fixed;
    top: 15%;
    right: -100%;
    width: 320px;
    max-width: 90%;
    background-color: white;
    padding: 12px;
    border-radius: 12px 0 0 12px;
    z-index: 1000;
    transition: right 0.6s ease-in-out;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
}

.tweet-container.show {
    right: 0;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: red;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease-in-out;
}

.close-btn:hover {
    background-color: red;
    transform: scale(1.1);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}

.close-btn:active {
    transform: scale(0.9);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

@media (max-width: 600px) {
    .tweet-container {
        width: 90%;
        right: -100%;
        top: auto;
        bottom: 20px;
        padding-right: 30px;
        border-radius: 10px;
    }

    .tweet-container.show {
        right: 5%;
    }
}

.blog-content {
    padding: 20px;
}

.blog-content h1 {
    color: #007bff;
}

.blog-content p {
    line-height: 1.6;
}
</style>
