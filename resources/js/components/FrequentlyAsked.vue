<script>
import { ref } from "vue";

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
                answer: '<img src="/public/assets/images/21.png" alt="Marriage Guidance Chart" class="img-fluid" />',
            },
        ]);

        const toggleItem = (index) => {
            activeItem.value = activeItem.value === index ? null : index;
        };

        return { activeItem, faqItems, toggleItem };
    },
};
</script>

<template>
    <div class="asked_main" :class="{ 'dark-theme-asked_main': isDarkMode }">
        <div class="container">
            <h1 class="faq-h1" :class="{ 'dark-theme-faq-h1': isDarkMode }">
                Frequently Asked Questions
            </h1>
            <div class="faq-row">
                <!-- Left: Image and description -->
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

                <!-- Right: FAQ Questions and Answers -->
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
    max-height: 200px;
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
</style>
