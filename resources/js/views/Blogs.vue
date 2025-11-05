<script setup>
import { ref, onMounted, onBeforeUnmount, computed } from "vue";
import axios from "axios";
const blogs = ref([]);
const selectedBlog = ref(null);
const showPopup = ref(false);
let shownOnce = false;
let hideTimeout = null;
let reappearTimeout = null;
const newsletterEmail = ref("");

const socialMediaLinks = ref({
    x: "https://twitter.com/UgandaSickle",
    facebook: "https://facebook.com/yourpage",
    instagram: "https://instagram.com/yourpage",
});

const publications = ref([
    {
        id: 1,
        title: "Annual Report 2024",
        file: "/documents/annual_report_2024.pdf",
    },
    {
        id: 2,
        title: "Sickle Cell Awareness Guide",
        file: "/documents/scd_guide.pdf",
    },
    {
        id: 3,
        title: "Community Outreach Findings",
        file: "/documents/outreach_findings.pdf",
    },
]);

const quickLinks = ref([
    { id: 1, title: "Our Mission & Vision", url: "/" },
    { id: 2, title: "Donate Now", url: "/" },
    { id: 3, title: "Volunteer Registration", url: "" },
    { id: 4, title: "Contact Support", url: "" },
]);

const searchTerm = ref("");

const fetchBlogs = async () => {
    try {
        const res = await axios.get("/api/blogs");
        blogs.value = res.data.blogs.data;
    } catch (error) {
        console.error(error);
    }
};

const filteredBlogs = computed(() => {
    if (!searchTerm.value) {
        return blogs.value;
    }
    const lowerCaseSearch = searchTerm.value.toLowerCase();

    return blogs.value.filter((blog) => {
        return (
            blog.title.toLowerCase().includes(lowerCaseSearch) ||
            blog.description.toLowerCase().includes(lowerCaseSearch)
        );
    });
});

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleDateString("en-US", {
        year: "2-digit",
        month: "short",
        day: "numeric",
    });
};

const showModal = (blog) => {
    selectedBlog.value = blog;
};

const closeModal = () => {
    selectedBlog.value = null;
};

const subscribe = () => {
    if (newsletterEmail.value) {
        alert(`Thank you for subscribing with: ${newsletterEmail.value}`);
        newsletterEmail.value = "";
    } else {
        alert("Please enter a valid email address.");
    }
};

const shareArticle = (platform) => {
    if (!selectedBlog.value) return;

    const baseUrl = "https://www.capsci-uganda.org/blogs/";
    const finalUrl = baseUrl + selectedBlog.value.id; // The actual unencoded URL string
    const blogUrl = encodeURIComponent(finalUrl); // The encoded URL for query parameters

    const blogTitle = encodeURIComponent(selectedBlog.value.title);

    const text = encodeURIComponent(
        `Read "${blogTitle}" - an important update from our organization! \n\n${finalUrl}`,
    );

    let url = "";

    switch (platform) {
        case "twitter":
            url = `https://twitter.com/intent/tweet?text=${text}`;
            break;
        case "facebook":
            url = `https://www.facebook.com/sharer/sharer.php?u=${blogUrl}`;
            break;
        case "linkedin":
            url = `https://www.linkedin.com/shareArticle?mini=true&url=${blogUrl}&title=${blogTitle}`;
            break;
        case "whatsapp":
            url = `https://api.whatsapp.com/send?text=${text}`;
            break;
        default:
            return;
    }

    window.open(url, "_blank", "width=600,height=400");
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
                    href="https://twitter.com/UgandaSickle/status/1885259581686706531?ref-src=twsrc%5Etfw"
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
                <h1>/ Blogs</h1>
                <h1>Welcome to our Blogs Page</h1>
            </div>
        </section>

        <div class="page-header container">
            <h1>Our Latest Articles</h1>
        </div>

        <div class="container content-layout">
            <div class="sidebar" :class="{ 'dark-theme-events': isDarkMode }">
                <h2>Publications & Resources 📚</h2>
                <div class="resource-list">
                    <div
                        v-for="pub in publications"
                        :key="pub.id"
                        class="resource-item"
                    >
                        <a
                            :href="pub.file"
                            target="_blank"
                            :download="pub.title + '.pdf'"
                        >
                            <span class="resource-title">{{ pub.title }}</span>
                            <span class="download-icon">↓ PDF</span>
                        </a>
                    </div>
                </div>

                <div class="quick-links-card">
                    <h2>Quick Links 🔗</h2>
                    <div class="link-list">
                        <div
                            v-for="link in quickLinks"
                            :key="link.id"
                            class="quick-link-item"
                        >
                            <a :href="link.url">
                                <span class="link-title">{{ link.title }}</span>
                                <span class="link-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="newsletter-card">
                    <h2>Stay Connected</h2>
                    <p>
                        Get the latest news and updates directly to your inbox.
                    </p>
                    <div class="signup-form">
                        <input
                            type="email"
                            v-model="newsletterEmail"
                            placeholder="Your email address"
                            class="email-input"
                            @keyup.enter="subscribe"
                        />
                        <button @click="subscribe" class="subscribe-btn">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-blog-content">
                <div class="search-container">
                    <input
                        type="text"
                        v-model="searchTerm"
                        placeholder="Search articles by title or keywords..."
                        class="search-input"
                    />
                </div>

                <div class="blog-list">
                    <div
                        v-for="blog in filteredBlogs"
                        :key="blog.id"
                        class="blog-card"
                        @click="showModal(blog)"
                        :style="{
                            'background-image': blog.image
                                ? 'url(\'/storage/' + blog.image + '\')'
                                : 'none',
                        }"
                    >
                        <div class="card-overlay"></div>
                        <div class="card-content">
                            <p class="card-title-line">
                                <span class="blog-date">{{
                                    formatDate(blog.created_at)
                                }}</span>
                                <span class="blog-title">{{ blog.title }}</span>
                            </p>

                            <span
                                class="continue-reading"
                                @click.stop="showModal(blog)"
                            >
                                Continue Reading &rarr;
                            </span>
                        </div>
                    </div>

                    <p v-if="filteredBlogs.length === 0" class="no-results">
                        No articles found matching "{{ searchTerm }}".
                    </p>
                </div>
            </div>

            <div
                v-if="selectedBlog"
                class="modal-overlay"
                @click.self="closeModal"
            >
                <div class="modal-content">
                    <img
                        v-if="selectedBlog.image"
                        :src="'/storage/' + selectedBlog.image"
                        class="modal-img"
                    />

                    <h2>{{ selectedBlog.title }}</h2>
                    <p>
                        <strong>Published:</strong>
                        {{ formatDate(selectedBlog.created_at) }}
                    </p>
                    <p class="description">{{ selectedBlog.description }}</p>

                    <div class="share-section">
                        <h3>Share This Article:</h3>
                        <div class="share-buttons">
                            <button
                                @click="shareArticle('twitter')"
                                class="share-btn twitter"
                            >
                                <i class="fab fa-twitter"></i> 🐦 X
                            </button>
                            <button
                                @click="shareArticle('facebook')"
                                class="share-btn facebook"
                            >
                                <i class="fab fa-facebook-f"></i> Facebook
                            </button>
                            <button
                                @click="shareArticle('whatsapp')"
                                class="share-btn whatsapp"
                            >
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </button>
                            <button
                                @click="shareArticle('linkedin')"
                                class="share-btn linkedin"
                            >
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </button>
                        </div>
                    </div>

                    <div class="follow-section">
                        <h3>Follow Our Journey:</h3>
                        <div class="social-icons">
                            <a
                                :href="socialMediaLinks.x"
                                target="_blank"
                                class="social-icon x"
                            >
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a
                                :href="socialMediaLinks.facebook"
                                target="_blank"
                                class="social-icon facebook"
                            >
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a
                                :href="socialMediaLinks.instagram"
                                target="_blank"
                                class="social-icon instagram"
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="modal-close-wrapper">
                        <button
                            class="modal-close-btn-bottom"
                            @click="closeModal"
                        >
                            Close Article
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.modal-content {
    position: relative;
    background: #f9f9f9;
    padding: 30px;
    max-width: 800px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    border-radius: 0;
    text-align: left;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    animation: fadeIn 0.3s ease-in-out;
}

.modal-close-wrapper {
    width: 100%;
    padding-top: 20px;
    margin-top: 30px;
    border-top: 1px solid #eee;
    text-align: left;
}

.modal-close-btn-bottom {
    padding: 12px 25px;
    min-width: 120px;
    margin-left: 0;
    color: white;
    background-color: red;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 700;
    transition:
        background-color 0.2s ease-in-out,
        transform 0.2s ease;
}

.modal-close-btn-bottom:hover {
    background: #b30000;
    transform: translateY(-2px);
}

.share-section,
.follow-section {
    padding: 20px 0;
    margin-top: 20px;
    border-top: 1px solid #eee;
    text-align: center;
}

.share-section h3,
.follow-section h3 {
    font-size: 1.2rem;
    color: #343a40;
    margin-bottom: 15px;
    font-weight: 600;
}

.share-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.share-btn {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: 700;
    cursor: pointer;
    transition: opacity 0.2s;
    font-size: 0.9rem;
    min-width: 110px;
}

.share-btn:hover {
    opacity: 0.85;
}

.share-btn i {
    margin-right: 5px;
}

.share-btn.twitter {
    background-color: #000000;
}
.share-btn.facebook {
    background-color: #1877f2;
}
.share-btn.linkedin {
    background-color: #0a66c2;
}
.share-btn.whatsapp {
    background-color: #25d366;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 15px;
}

.social-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    color: white;
    font-size: 1.2rem;
    transition:
        transform 0.2s,
        box-shadow 0.2s;
}

.social-icon:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.social-icon.x {
    background-color: #000000;
}
.social-icon.facebook {
    background-color: #1877f2;
}
.social-icon.instagram {
    background-color: #e4405f;
}

.page-header {
    text-align: center;
    padding: 20px 0 40px 0;
}

.page-header h1 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #343a40;
    position: relative;
    display: inline-block;
}

@keyframes zoomInOut {
    0% {
        background-size: 100% 100%;
    }
    50% {
        background-size: 110% 110%;
    }
    100% {
        background-size: 100% 100%;
    }
}

.content-layout {
    display: grid;
    grid-template-columns: minmax(250px, 1fr) 3fr;
    gap: 30px;
    padding: 20px;
}

.main-blog-content {
    display: flex;
    flex-direction: column;
}

.search-container {
    margin-bottom: 25px;
    padding: 0 5px;
}

.search-input {
    width: 100%;
    padding: 12px 15px;
    font-size: 1.1rem;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: border-color 0.2s ease;
}

.search-input:focus {
    border-color: red;
    outline: none;
    box-shadow: 0 0 8px rgba(255, 0, 0, 0.2);
}

.no-results {
    grid-column: 1 / -1;
    text-align: center;
    font-size: 1.2rem;
    color: #888;
    padding: 40px 0;
}

@media (max-width: 992px) {
    .content-layout {
        grid-template-columns: 1fr;
    }
}

.sidebar {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    height: fit-content;
    position: sticky;
    top: 20px;
}

.sidebar h2 {
    font-size: 1.5rem;
    color: #343a40;
    margin-bottom: 20px;
    border-bottom: 2px solid red;
    padding-bottom: 10px;
}

.resource-list {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.resource-item {
    margin-bottom: 15px;
}

.resource-item a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
    padding: 10px;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    color: #495057;
    transition: all 0.2s ease;
    background-color: white;
    font-size: 0.95rem;
}

.resource-item a:hover {
    background-color: #f1f1f1;
    border-color: red;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.download-icon {
    font-weight: 700;
    color: red;
    margin-left: 10px;
}

.quick-links-card {
    background-color: white;
    padding: 15px;
    border-radius: 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.quick-links-card h2 {
    font-size: 1.4rem;
    color: #343a40;
    margin-bottom: 15px;
    border-bottom: 2px solid #5a5a5a;
    padding-bottom: 8px;
}

.link-list {
    list-style: none;
    padding: 0;
}

.quick-link-item {
    margin-bottom: 8px;
}

.quick-link-item a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
    padding: 8px 5px;
    color: #007bff;
    border-bottom: 1px solid #eee;
    transition: all 0.2s ease;
}

.quick-link-item a:hover {
    color: red;
    background-color: #f7f7f7;
    padding-left: 10px;
}

.link-arrow {
    font-weight: bold;
    margin-left: 10px;
}

.newsletter-card {
    background-color: #e6e6e6;
    padding: 20px;
    border-radius: 0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.newsletter-card h2 {
    color: red;
    font-size: 1.6rem;
    margin-bottom: 10px;
    border-bottom: none;
}

.newsletter-card p {
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 15px;
}

.signup-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.email-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    width: 100%;
    box-sizing: border-box;
}

.subscribe-btn {
    padding: 10px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 700;
    transition:
        background-color 0.2s ease,
        transform 0.1s ease;
    width: 100%;
}

.subscribe-btn:hover {
    background-color: #b30000;
    transform: translateY(-1px);
}

.blog-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
    padding: 0;
}

.blog-card {
    position: relative;
    min-height: 250px;
    background-color: #333;
    background-size: cover;
    background-position: center;
    border-radius: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    cursor: pointer;
    border: none;
}

.blog-card:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.65);
    transition: background 0.3s ease;
    z-index: 1;
}

.blog-card:hover .card-overlay {
    background: rgba(0, 0, 0, 0.4);
}

.card-content {
    position: relative;
    z-index: 2;
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    height: 300px;
}

.card-title-line {
    display: flex;
    flex-direction: column;
    margin-bottom: 25px;
    line-height: 1.4;
    color: white;
    font-size: 1rem;
    flex-grow: 1;
    transition: color 0.3s ease;
}

.blog-date {
    font-size: 0.9rem;
    font-weight: 500;
    color: #ccc;
    margin-bottom: 5px;
}

.blog-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

.continue-reading {
    align-self: flex-start;
    color: red;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    padding: 5px 0;
    transition:
        color 0.2s ease,
        transform 0.2s ease;
}

.blog-card:hover .continue-reading {
    color: #ff9999;
}
.blog-card:hover .continue-reading:hover {
    color: #fff;
    text-decoration: underline;
}

.oj {
    padding: 0;
}
.landing-section {
    position: relative;
    background-size: 100% 100%;
    background-position: center;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 40px;
    animation: fadeIn 1.5s ease-in;
    width: 100vw;
    max-width: 100vw;
    overflow: hidden;
    background-attachment: fixed;
    animation: zoomInOut 15s ease-in-out infinite;
    transition: none;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
    border-radius: 0;
}

.landing-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 0;
    text-align: left;
    padding-left: 5%;
    max-width: 90%;
    margin-top: 33px;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    line-height: 60px;
    animation: slideDown 1s ease;
}

.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2000;
}

.modal-img {
    width: 100%;
    max-height: 45vh;
    object-fit: cover;
    margin-bottom: 25px;
    border-radius: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.modal-content h2 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 10px;
    color: #343a40;
    font-weight: 800;
    line-height: 1.2;
}

.modal-content p strong {
    font-weight: 600;
    color: #6c757d;
    font-size: 0.95rem;
}

.modal-content p {
    text-align: center;
    margin-bottom: 20px;
}

.modal-content .description {
    text-align: justify;
    margin: 30px 0;
    line-height: 1.8;
    font-size: 1.05rem;
    color: #495057;
    white-space: pre-line;
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
