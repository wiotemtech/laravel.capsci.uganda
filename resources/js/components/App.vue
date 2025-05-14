<script>
import HeaderBanner from "./HeaderBanner.vue";
import LandingPage from "./LandingPage.vue";
import UnderstandingSickleCell from "./UnderstandingSickleCell.vue";
import AboutUs from "./AboutUs.vue";
import OurServices from "./OurServices.vue";
import OurImpact from "./OurImpact.vue";
import Partners from "./Partners.vue";
import FrequentlyAsked from "./FrequentlyAsked.vue";

import Footer from "./Footer.vue";

export default {
    components: {
        HeaderBanner,
        LandingPage,
        UnderstandingSickleCell,
        AboutUs,
        OurServices,
        OurImpact,
        Partners,
        FrequentlyAsked,

        Footer,
    },
    data() {
        return {
            isDarkMode: false,
        };
    },
    methods: {
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            document.body.classList.toggle("dark-theme-body", this.isDarkMode);
            localStorage.setItem("theme", this.isDarkMode ? "dark" : "light");
        },
    },
    mounted() {
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme === "dark") {
            this.isDarkMode = true;
            document.body.classList.add("dark-theme-body");
        }
    },
};
</script>

<template>
    <div id="app" class="wrapper">
        <HeaderBanner :isDarkMode="isDarkMode" />

        <main class="main-content">
            <LandingPage v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
            <understanding-sickle-cell
                v-if="$route.path === '/'"
                :isDarkMode="isDarkMode"
            />
            <AboutUs v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
            <OurServices v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
            <OurImpact v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
            <FrequentlyAsked
                v-if="$route.path === '/'"
                :isDarkMode="isDarkMode"
            />
            <Partners v-if="$route.path === '/'" :isDarkMode="isDarkMode" />

            <router-view />
        </main>

        <Footer :isDarkMode="isDarkMode" />
    </div>
</template>

<style>
html,
body,
#app {
    height: 100%;
    margin: 0;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.main-content {
    flex: 1;
}
</style>
