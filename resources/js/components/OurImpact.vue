<script setup>
import { ref, onMounted, defineProps } from "vue";

const props = defineProps({
    isDarkMode: {
        type: Boolean,
        default: false,
    },
});

const stats = ref([
    {
        icon: "fa fa-heart",
        target: 10000,
        label: "Home care training",
        count: 0,
    },
    { icon: "fa fa-hospital", target: 1200, label: "Referrals", count: 0 },
    {
        icon: "fa fa-users",
        target: 3000000,
        label: "Sickle Cell awareness reach",
        count: 0,
    },
    { icon: "fa fa-flask", target: 1, label: "Research", count: 0 },
]);

const counters = ref([]);

function animateCounter(el, endValue) {
    let start = 0;
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const value = Math.floor(progress * endValue);
        el.innerText = value.toLocaleString();
        if (progress < 1) requestAnimationFrame(update);
    }

    requestAnimationFrame(update);
}

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const index = [...counters.value].indexOf(entry.target);
                    if (index !== -1 && stats.value[index].count === 0) {
                        stats.value[index].count = stats.value[index].target; // immediately show number
                        animateCounter(entry.target, stats.value[index].target);
                    }
                }
            });
        },
        { threshold: 0.3 },
    );

    counters.value.forEach((el) => {
        observer.observe(el);
    });
});
</script>

<template>
    <div
        class="w-100 mt-1 statistics-container"
        :class="{ 'dark-theme': isDarkMode }"
    >
        <h1
            class="statistics-h1 text-center mb-4"
            :class="{ 'dark-theme-text': isDarkMode }"
        >
            Our Impact
        </h1>

        <div class="row text-center">
            <div class="col-md-3" v-for="(item, index) in stats" :key="index">
                <div>
                    <i
                        :class="item.icon"
                        style="font-size: 2rem; color: red"
                    ></i>
                </div>
                <h4
                    class="counter"
                    ref="counters"
                    :data-target="item.target"
                    :class="{ 'dark-theme-text': isDarkMode }"
                >
                    {{ item.count }}
                </h4>
                <p :class="{ 'dark-theme-text': isDarkMode }">
                    <small>{{ item.label }}</small>
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.statistics-container {
    margin-top: -88px;
    padding: 15px 10px;
    background-color: whitesmoke;
}

body.dark-theme-body .statistics-container {
    background-color: #222;
    color: white;
}

p {
    font-size: 23px;
    color: #222;
}

body.dark-theme-body p {
    color: white;
}

.statistics-h1 {
    font-size: 30px;
    font-weight: bold;
    color: red;
}

body.dark-theme-body .statistics-h1 {
    color: white;
}

.counter {
    font-size: 20px;
    margin: 10px 0;
    font-weight: bold;
}

body.dark-theme-body .counter {
    color: whitesmoke;
}
</style>
