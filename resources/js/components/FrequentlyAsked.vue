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
                const twitterScript = document.createElement('script');
                twitterScript.setAttribute('src', 'https://platform.twitter.com/widgets.js');
                twitterScript.setAttribute('async', '');
                twitterScript.setAttribute('charset', 'utf-8');
                document.head.appendChild(twitterScript);
            } else if (
                window.twttr &&
                typeof window.twttr.widgets !== 'undefined' &&
                typeof window.twttr.widgets.load === 'function'
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
        <div class="tweet-container" :class="{ 'show': showPopup }">
                <h1 class="follow">follow us on x</h1>
                <button class="close-btn" @click="dismissPopup">×</button>
                <blockquote class="twitter-tweet" data-width="280">
                    <p lang="en" dir="ltr">
                        Integrated Sickle Cell services!<br />
                        Residents of Ayago, Apoi Subcounty in Apac Dist have tuned up for sickle cell traits screening; we have collaborated
                        with Ayago Health Centre II to screen for Malaria, HIV, Sphilys, H.pylori, HepB, RBS, and Hypertension.
                        <a href="https://twitter.com/cphluganda?ref_src=twsrc%5Etfw">@cphluganda</a>
                        <a href="https://twitter.com/TestandTreat37?ref_src=twsrc%5Etfw">@TestandTreat37</a>
                        <a href="https://t.co/1eAO3W8bIn">pic.twitter.com/1eAO3W8bIn</a>
                    </p>
                    &mdash; Catherine Phil Sickle Cell Support Initiative (@UgandaSickle)
                    <a href="https://twitter.com/UgandaSickle/status/1885259581686706531?ref_src=twsrc%5Etfw">January 31, 2025</a>
                </blockquote>
            </div>
        <div class="container">
            <h1 class="faq-h1" :class="{ 'dark-theme-faq-h1': isDarkMode }">
                Frequently Asked Questions
            </h1>
            <div class="faq-row">
              
                <div
                    class="faq-image-col"
                    :class="{ 'dark-theme-faq-image-col': isDarkMode }"
                >
                    <div class="ask_img">
                        <figure>
                            <img
                                src="/public/assets/images/about.jpg"
                                alt="FAQ Image"
                                class="faq-image"
                                :class="{ 'dark-theme-faq-image': isDarkMode }"
                            />
                        </figure>
                    </div>
                </div>

       
                <div
                    class="faq-content-col"
                    :class="{ 'dark-theme-faq-content-col': isDarkMode }"
                >
                    <div
                        class="ask_box"
                        :class="{ 'dark-theme-ask_box': isDarkMode }"
                    >
                        <div
                            class="simpaly"
                            v-for="(item, index) in faqItems"
                            :key="index"
                            :class="{ 'dark-theme-simpaly': isDarkMode }"
                        >
                            <div
                                class="slider"
                                @click="toggleItem(index)"
                                :class="{
                                    'dark-theme-slider': isDarkMode,
                                    active: activeItem === index,
                                }"
                            >
                                <span>+</span>
                                <a
                                    href="#"
                                    @click.prevent="toggleItem(index)"
                                    class="faq-question-link"
                                    :class="{
                                        'dark-theme-faq-question-link':
                                            isDarkMode,
                                    }"
                                >
                                    {{ item.question }}
                                </a>
                            </div>
                            <div
                                class="content"
                                :class="{
                                    'dark-theme-content': isDarkMode,
                                    active: activeItem === index,
                                }"
                            >
                                <p
                                    class="faq-p"
                                    :class="{ 'dark-theme-faq-p': isDarkMode }"
                                >
                                    <span v-html="item.answer"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.asked_main {
    background-color: #2c3e50;
    padding: 0px 0;
}

body.dark-theme-body .asked_main {
    background-color: #222;
    color: red;
}

.container {
    max-width: 1900px;
    margin: auto;
    padding: 0 20px;
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

body.dark-theme-body .faq-h1 {
    color: white;
}
.faq-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}
.faq-image-col {
    flex: 1 1 40%;
    padding: 25px;
    border-radius: 10px;
}
.ask_img {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.faq-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}
.faq-desc {
    margin-top: 15px;
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}
.faq-content-col {
    flex: 1 1 55%;
    padding: 10px;
}
.simpaly {
    margin-bottom: 20px;
    border-bottom: 1px solid red;
}
.slider {
    cursor: pointer;
    padding: 8px 10px;
    background-color: #f1f1f1;
    color: red;
    border-radius: 6px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    justify-content: space-between;
    width: 100%;
}

body.dark-theme-body .slider {
    background-color: #222;
    border: 1px solid red;
    color: white;
}
.slider:hover {
    background-color: rgb(98, 31, 31);
    color: white;
}
.slider span {
    font-size: 1.2rem;
    margin-right: 10px;
}
.faq-question-link {
    text-decoration: none;
    color: inherit;
    font-family: "Poppins", sans-serif;
    font-size: 1.1rem;
    flex-grow: 1;
    margin-left: 10px;
}
.content {
    max-height: 0;
    overflow: hidden;
    transition:
        max-height 0.4s ease,
        padding 0.3s ease;
    padding: 0 0px;
    border-left: 1px solid red;
}

body.dark-theme-body .content {
    border-left: 1px solid white;
    color: red;
}
.content.active {
    max-height: 560px;
    padding: 8px;
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

@media (max-width: 768px) {
    .faq-row {
        flex-direction: column;
    }
    .faq-image-col,
    .faq-content-col {
        flex: 1 1 100%;
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

.close-btn:active{
    transform: scale(0.9);
    box-shadow: 0 1px 2px rgba(0,0,0,0.3)
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
