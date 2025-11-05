<script>
import { ref, onMounted, onBeforeUnmount } from "vue";

export default {
    name: "FAQSection",
    props: {
        isDarkMode: Boolean,
    },
    setup() {
        const activeItem = ref(null);

        const faqItems = ref([
            {
                question: "What is sickle cell disease?",
                answer: "Sickle cell disease is a genetic disorder that affects the production of hemoglobin...",
            },
            {
                question: "What are the symptoms of sickle cell disease?",
                answer: "Symptoms include:<br>- Anemia<br>- Pain crises<br>- Frequent infections<br>- Jaundice<br>- Delayed growth",
            },
            {
                question: "How is sickle cell disease inherited?",
                answer: "It is inherited in an autosomal recessive pattern. If both parents are carriers, there's a 25% chance of the child having the disease.",
            },
            {
                question: "Can sickle cell disease be cured?",
                answer: "There is no universal cure, but bone marrow transplant and gene therapy show promise.",
            },
            {
                question: "How can it be managed?",
                answer: "Management includes pain relief, hydration, antibiotics, and hydroxyurea.",
            },
            {
                question:
                    "What’s the difference between a dominant and recessive gene?",
                answer: "Dominant genes override recessive ones. Sickle cell is recessive; two copies are needed to show the disease.",
            },
            {
                question: "Who to marry?",
                answer: '<img src="/assets/images/chart.jpeg" alt="Marriage Guidance Chart" class="img-fluid" />',
            },
        ]);

        const showPopup = ref(false);
        const shownOnce = ref(false);
        let hideTimeout = null;
        let reappearTimeout = null;

        const toggleItem = (index) => {
            activeItem.value = activeItem.value === index ? null : index;
        };

        const showTweet = () => {
            if (!shownOnce.value) {
                showPopup.value = true;
                shownOnce.value = true;

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

        return {
            activeItem,
            faqItems,
            toggleItem,
            showPopup,
            dismissPopup,
        };
    },
};
</script>

<template>
    <div class="asked_main" :class="{ 'dark-theme-asked_main': isDarkMode }">
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

        <div class="container">
            <h2 class="about-us-title">Explore</h2>
            <h1
                class="about-us-subtitle"
                :class="{ 'dark-theme-faq-h1': isDarkMode }"
            >
                Frequently Asked Questions
            </h1>
            <div class="faq-row">
                <div class="faq-content-col">
                    <div class="accordion" id="faqAccordion">
                        <div
                            class="accordion-item my-3 custom-accordion-item"
                            v-for="(item, index) in faqItems"
                            :key="index"
                        >
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button custom-accordion-button"
                                    type="button"
                                    @click="toggleItem(index)"
                                    :class="{ collapsed: activeItem !== index }"
                                    :aria-expanded="
                                        activeItem === index ? 'true' : 'false'
                                    "
                                >
                                    {{ item.question }}
                                </button>
                            </h2>
                            <div
                                :id="`collapse${index}`"
                                class="accordion-collapse"
                                :class="{ show: activeItem === index }"
                            >
                                <div
                                    class="accordion-body custom-accordion-body"
                                >
                                    <p class="faq-p">
                                        <span v-html="item.answer"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.about-us-title {
    font-size: 1.5rem;
    text-align: center;
    font-weight: bold;
    font-family: "Oswald";
    color: red;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    color: white;
    line-height: 1.2;
    margin-bottom: 20px;
}

.asked_main {
    background-image: url("/public/assets/images/new.jpeg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 0px 0;
    position: relative;
    z-index: 1;
}

.asked_main::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(44, 62, 80, 0.7);
    z-index: -1;
}

body.dark-theme-body .asked_main::before {
    background-color: rgba(34, 34, 34, 0.8);
}

.faq-h1 {
    font-family: "Poppins", sans-serif;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    color: white;
    padding-top: 30px;
    font-weight: 600;
}

.faq-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding-bottom: 50px;
}

.faq-content-col {
    flex: 0 1 700px;
    max-width: 90%;
    padding: 10px;
}

.faq-p {
    font-family: "Poppins", sans-serif;
    font-size: 18px;
    color: white;
    line-height: 1.6;
}
.img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 6px;
    margin-top: 10px;
}

.accordion {
    --bs-accordion-border-width: 0;
    --bs-accordion-bg: transparent;
}

.custom-accordion-item {
    border: none;
    border-radius: 8px;
    overflow: hidden;
    border-bottom: 1px solid red !important;
}

.custom-accordion-button {
    background-color: #f1f1f1;
    color: red;
    font-weight: 600;
    padding: 1rem 1.25rem;
    transition: all 0.3s ease;
    border-radius: 6px;
    font-family: "Poppins", sans-serif;
    font-size: 1.1rem;
    box-shadow: none !important;
    width: 100%;
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.custom-accordion-button:not(.collapsed) {
    background-color: rgb(98, 31, 31);
    color: white;
}

.custom-accordion-button::after {
    background-image: none;
    content: "+";
    font-size: 1.5rem;
    width: auto;
    height: auto;
    transform: none;
    transition: transform 0.3s ease-in-out;
}

.custom-accordion-button:not(.collapsed)::after {
    content: "—";
    transform: rotate(0deg);
}

.custom-accordion-button:hover {
    background-color: rgb(98, 31, 31);
    color: white;
}

.custom-accordion-body {
    background-color: transparent;
    border-left: 1px solid red;
    padding: 10px 15px;
    overflow: hidden;
}

.accordion-collapse {
    max-height: 0;
    transition: max-height 0.4s ease-in-out;
    overflow: hidden;
}

.accordion-collapse.show {
    max-height: 500px;
}

.dark-theme-faq-content-col .custom-accordion-item {
    border-bottom: 1px solid white !important;
}

.dark-theme-faq-content-col .custom-accordion-button {
    background-color: #222;
    border: 1px solid red;
    color: white;
}

.dark-theme-faq-content-col .custom-accordion-button:hover {
    background-color: red;
    color: white;
}

.dark-theme-faq-content-col .custom-accordion-button:not(.collapsed) {
    background-color: red;
    color: white;
}

.dark-theme-faq-content-col .custom-accordion-body {
    border-left: 1px solid white;
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
</style>
