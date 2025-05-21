<script>
export default {
    data() {
        return {
            isDarkMode: false,
            showPopup: false,
            shownOnce: false,
            hideTimeout: null,
            reappearTimeout: null,
        };
    },

    methods: {
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
    },

    beforeUnmount() {
        clearTimeout(this.hideTimeout);
        clearTimeout(this.reappearTimeout);
    },
};
</script>

<template>
    <div>
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
            style="background-image: url(&quot;/assets/images/new.jpeg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Upcoming Events</h1>
                <p class="tagline">"Leave No One Behind"</p>
            </div>
        </section>

        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            class="banner_main mt-4 mt-sm-5"
        >
            <div class="banner-container">
                <img
                    class="stretched-banner-img"
                    src="/public/assets/images/uhuru.png"
                    alt="Uhuru Banner"
                />
            </div>
        </section>

        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="margin-top: -60px; background-color: #2c3e50"
            class="p-3 p-sm-5"
        >
            <div class="container">
                <h2 class="text-center my-3 my-sm-5" style="color: white">
                    <span style="color: red">Sickle Cell</span> Run Event
                </h2>
                <div class="row row-cols-1 row-cols-md-3 gx-4 gy-4">
                    <div class="col">
                        <div class="event-card text-center">
                            <h4 class="card-title">Date</h4>
                            <h2>
                                <span class="highlight">4th</span>, October,
                                2025
                            </h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="event-card text-center">
                            <h4 class="card-title">Location</h4>
                            <h2><span class="highlight">Lira</span> City</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="event-card text-center">
                            <h4 class="card-title">Organizers</h4>
                            <h6>
                                Catherine Phil Sickle Cell Support Initiative
                                <span class="highlight">&</span> Partners
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            class="py-4 py-sm-5"
        >
            <div class="container">
                <div class="row mt-3 mt-sm-5 p-3 p-sm-5">
                    <div class="col-12 mb-5">
                        <div class="info-box">
                            <h2 class="section-heading">
                                Our <span class="highlight">Objective</span>
                            </h2>
                            <p>
                                To raise funds for the purchase of two HB
                                electrophoresis machines (point of care) for
                                Lira Regional Referral Hospital and Alebtong
                                Health IV to improve diagnosis (Newborn
                                screening) in the area.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="info-box">
                            <h2 class="section-heading">
                                <span class="highlight">Why</span>
                            </h2>
                            <p>
                                Every year, 25,000 children are born with sickle
                                cell disease in Uganda. Unfortunately, 80% of
                                these children do not live past their 5th
                                birthday, and 20% struggle to access adequate
                                healthcare services. Lango Subregion has the
                                highest prevalence of sickle cell disease, with
                                Alebtong district having a prevalence rate of
                                23.8%, which is higher than the national average
                                of 17%.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info-box">
                            <h2 class="section-heading">
                                Who can
                                <span class="highlight">participate</span>
                            </h2>
                            <p>
                                Everyone is welcome to participate in the Sickle
                                Cell Run event! Whether you're a seasoned runner
                                or a first-time participant, your involvement
                                and support are crucial in making a positive
                                impact on the lives of those affected by sickle
                                cell disease in Uganda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div
            :class="{ 'dark-theme-events': isDarkMode }"
            class="fixed-bottom-right"
            style="margin-bottom: 70px"
        >
            <a
                class="twitter-dm-button w3-btn w3-green floating-icon"
                href="https://wa.me/256774526849"
            >
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <div
            :class="{ 'dark-theme-events': isDarkMode }"
            class="fixed-bottom-right"
            style="bottom: 80px; right: 80px; margin-bottom: 10px"
        >
            <a
                class="twitter-dm-button w3-btn w3-black floating-icon"
                href="https://x.com/UgandaSickle"
            >
                <i class="fab fa-x"></i>
            </a>
        </div>
    </div>
</template>

<style scoped>
@keyframes translateBackground {
    0% {
        transform: scale(1.05) translateY(0);
    }
    100% {
        transform: scale(1.05) translateY(-10px);
    }
}

@keyframes translateText {
    0% {
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.container {
    margin-top: 70px;
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
    animation: translateBackground 6s ease-in-out infinite alternate;
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
    animation: translateText 1s ease forwards;
}

.tagline {
    font-weight: bold;
    font-size: 20px;
    color: white;
    animation: translateText 1.2s ease forwards;
}

.banner-container {
    margin-top: -55px;
    width: 100%;
    overflow: hidden;
}

.stretched-banner-img {
    width: 100%;
    height: auto;
    display: block;
}

.event-card {
    background: #fff;
    padding: 20px;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    height: 100%;
}

body.dark-theme-body .event-card {
    background: #222;
    border: 1px solid red;
    border-radius: 10px;
    color: white;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

.card-title {
    font-size: 1.1rem;
    font-weight: bold;
    color: #444;
    margin-bottom: 10px;
}

body.dark-theme-body .card-title {
    color: white;
}

.highlight {
    color: black;
    font-weight: bold;
}

body.dark-theme-body .highlight {
    color: red;
}

.info-box {
    background: whitesmoke;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    border: none;
}

body.dark-theme-body .info-box {
    background: #222;
    border: 1px solid red;
    border-radius: 10px;
    color: white;
}

.section-heading {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 1rem;
    text-align: center;
}

.fixed-bottom-right {
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 1000;
}

.floating-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    width: 40px;
    height: 40px;
    font-size: 20px;
    color: white;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.w3-btn {
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    background-color: transparent;
}

.w3-green {
    background-color: #4caf50 !important;
}

.w3-black {
    background-color: #000 !important;
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
