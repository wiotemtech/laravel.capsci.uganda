<template>
    <div class="erc-core-values">
        <div class="erc-header">
            <h3 class="about-us-title">Our Services</h3>
            <h4 class="about-us-subtitle">Together, we fight sickle cell</h4>
        </div>

        <div class="erc-values-grid">
            <div
                v-for="(value, index) in coreValues"
                :key="index"
                :class="[
                    'erc-value-card',
                    value.cssClass,
                    { 'is-visible': visibleCards.includes(index) },
                ]"
                :style="{ transitionDelay: `${index * 150}ms` }"
                ref="cards"
            >
                <div class="erc-value-content">
                    <div
                        class="erc-icon-container"
                        :style="{ borderColor: value.iconColor }"
                    >
                        {{ value.icon }}
                    </div>
                    <div class="erc-title-container">
                        <h3>{{ value.title }}</h3>
                    </div>
                </div>
                <p>{{ value.description }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const coreValues = ref([
    {
        title: "Clinical Services",
        description:
            "We offer referrals to our warriors through partner hospitals.",
        icon: "🏥",

        cssClass: "card-bg-dark-gray card-icon-maroon",
        iconColor: "#800000",
    },
    {
        title: "Counseling",
        description:
            "We provide genetic counseling, testing services, and family counseling.",
        icon: "🫂",

        cssClass: "card-bg-maroon card-icon-white",
        iconColor: "#ffffff",
    },
    {
        title: "Outreaches",
        description:
            "We conduct outreach programs to educate about SCD in Uganda.",
        icon: "🗺️",

        cssClass: "card-bg-red card-icon-white",
        iconColor: "#ffffff",
    },
    {
        title: "Advocay",
        description:
            "We advocate for policy changes to improve the rights of individuals with SCD.",
        icon: "📢",

        cssClass: "card-bg-dark-gray card-icon-maroon",
        iconColor: "#800000",
    },
    {
        title: "Capacity Building",
        description:
            "We collaborate with healthcare providers to improve SCD management.",
        icon: "🧠",

        cssClass: "card-bg-maroon card-icon-white",
        iconColor: "#ffffff",
    },
    {
        title: "Research",
        description:
            "We conduct research on SCD to inform policy and improve interventions.",
        icon: "🔬",

        cssClass: "card-bg-red card-icon-white",
        iconColor: "#ffffff",
    },
]);

const visibleCards = ref([]);
const cards = ref([]);

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const index = [...cards.value].indexOf(entry.target);
                    if (!visibleCards.value.includes(index)) {
                        visibleCards.value.push(index);
                    }
                }
            });
        },
        { threshold: 0.2 },
    );

    cards.value.forEach((card) => {
        if (card) observer.observe(card);
    });
});
</script>

<style scoped>
.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: red;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2rem;
    font-weight: bold;
    color: rgba(128, 0, 0, 0.8);
    line-height: 1.2;
    margin-bottom: 20px;
}

body {
    background-color: var(--section-bg);
    margin: 0;
    padding: 0;
}

.erc-core-values {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 2rem;
}

.erc-header {
    text-align: center;
    margin-bottom: 3rem;
}

.erc-values-grid {
    display: grid;
    gap: 2rem;
    grid-template-columns: repeat(1, 1fr);
}

@media (min-width: 768px) {
    .erc-values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .erc-values-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.erc-value-card {
    position: relative;
    padding: 2rem;
    border-radius: 0.75rem;

    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
    cursor: default;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    overflow: hidden;
    color: var(--light-gray-text);
}

body.dark-theme-body .erc-value-card {
    background-color: #222;
    border-top: 1px solid var(--maroon-primary);
    color: var(--light-gray-text);
}

.erc-value-card.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.erc-value-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 4px;
    background: var(--maroon-primary);
    transition: left 0.6s ease;
}

.erc-value-card:hover::before {
    left: 0;
}

.erc-value-card:hover {
    transform: translateY(-6px) scale(1.03);
    box-shadow: 0 18px 30px -6px rgba(0, 0, 0, 0.5);
}

.erc-value-content {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.erc-icon-container {
    font-size: 2rem;
    line-height: 1;
    padding: 0.5rem;
    border-radius: 9999px;
    border: 2px solid;
    flex-shrink: 0;
    background-color: transparent;
    transition: transform 0.3s ease;
}

.erc-value-card:hover .erc-icon-container {
    transform: scale(1.2) rotate(5deg);
}

.erc-title-container h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: red;
    margin-top: 0.25rem;
}

.card-bg-dark-gray {
    background-color: rgb(215, 173, 173);
}
.card-bg-maroon {
    background-color: rgb(153, 153, 225);
}
.card-bg-red {
    background-color: var(--deep-red);
}

.card-icon-maroon .erc-icon-container {
    background-color: rgba(128, 0, 0, 0.2);
}
.card-icon-white .erc-icon-container {
    background-color: rgba(255, 255, 255, 0.1);
}

.erc-value-card p {
    color: var(--light-gray-text);
}
</style>
