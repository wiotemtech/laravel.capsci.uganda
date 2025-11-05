<template>
    <div class="erc-stats-section">
        <div class="erc-stats-card">
            <div class="erc-stats-content">
                <div class="erc-stats-left">
                    <h6 class="about-us-title">By the Numbers</h6>
                    <h2 class="about-us-subtitle">Our Impact Story.</h2>
                </div>

                <div class="erc-stats-grid">
                    <div
                        v-for="(stat, index) in stats"
                        :key="index"
                        class="erc-stat-card"
                        ref="statCards"
                        :class="{ 'is-visible': visibleStats.includes(index) }"
                        :style="getCardStyles(index)"
                    >
                        <i
                            :class="['fas', stat.icon]"
                            :style="getGradientStyles(index)"
                        ></i>

                        <h1 :style="getGradientStyles(index)">
                            {{ stat.displayValue }}+
                        </h1>
                        <p>{{ stat.label }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const stats = ref([
    {
        label: "Home care training",
        value: 5000,
        displayValue: 0,
        icon: "fa-house-medical-circle-exclamation",
    },
    { label: "Referrals", value: 250, displayValue: 0, icon: "fa-right-left" },
    {
        label: "Sickle Cell awareness reach",
        value: 600,
        displayValue: 0,
        icon: "fa-bullhorn",
    },
    { label: "Research", value: 1, displayValue: 0, icon: "fa-microscope" },
]);

const cardColors = [
    {
        bgColor: "#fffde7",
        gradientStart: "#FFEB3B",
        gradientEnd: "#F57F17",
    },
    {
        bgColor: "#e8f5e9",
        gradientStart: "#4CAF50",
        gradientEnd: "#1B5E20",
    },
    {
        bgColor: "#e3f2fd",
        gradientStart: "#2196F3",
        gradientEnd: "#0D47A1",
    },
    {
        bgColor: "#ffebee",
        gradientStart: "#F44336",
        gradientEnd: "#B71C1C",
    },
];

const getCardStyles = (index) => {
    const color = cardColors[index % cardColors.length];
    return {
        backgroundColor: color.bgColor,
    };
};

const getGradientStyles = (index) => {
    const color = cardColors[index % cardColors.length];
    return {
        background: `linear-gradient(90deg, ${color.gradientStart}, ${color.gradientEnd})`,
        "-webkit-background-clip": "text",
        "-webkit-text-fill-color": "transparent",
    };
};

const visibleStats = ref([]);
const statCards = ref([]);

const animateCount = (stat) => {
    const end = stat.value;
    const duration = 1500;
    const startTime = performance.now();

    const step = (currentTime) => {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        stat.displayValue = Math.floor(progress * end);
        if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
};

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const index = [...statCards.value].indexOf(entry.target);
                    if (!visibleStats.value.includes(index)) {
                        visibleStats.value.push(index);
                        animateCount(stats.value[index]);
                    }
                }
            });
        },
        { threshold: 0.3 },
    );

    statCards.value.forEach((card) => {
        if (card) observer.observe(card);
    });
});
</script>

<style scoped>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");

.erc-stats-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 4rem 2rem;
}

.erc-stats-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.erc-stats-content {
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: nowrap;
}

.erc-stats-left {
    flex: 0 0 250px;
    text-align: left;
}

.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
    font-family: "Oswald";
    color: rgba(128, 0, 0, 0.8);
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2.5rem;
    font-weight: bold;
    color: red;
    line-height: 1.2;
    margin-bottom: 20px;
}

.erc-stats-grid {
    flex: 1;
    display: flex;
    gap: 1rem;
    justify-content: space-between;
}

.erc-stat-card {
    border-radius: 1rem;
    padding: 1.5rem 1rem;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.5s ease;
    opacity: 0;
    transform: translateY(40px);
    flex: 1;
    text-align: center;
    min-width: 150px;
}

.erc-stat-card.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.erc-stat-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.erc-stat-card i {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    display: block;
}

.erc-stat-card h1 {
    font-size: 2rem;
    font-weight: 800;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1.1;
}

.erc-stat-card p {
    margin-top: 0.5rem;
    font-size: 1rem;
    font-weight: 500;
    color: var(--text-color);
}

@media (max-width: 767px) {
    .erc-stats-content {
        flex-direction: column;
        gap: 2rem;
    }
    .erc-stats-grid {
        flex-wrap: wrap;
        justify-content: center;
    }
    .erc-stat-card {
        min-width: unset;
        width: calc(50% - 0.5rem);
    }
    .erc-stats-left {
        text-align: center;
    }
}
</style>
