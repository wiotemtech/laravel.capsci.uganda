<template>
  <div id="app" class="wrapper">
    <!-- Hide HeaderBanner if on NotFound or hidden layout paths -->
    <HeaderBanner v-if="!hideLayout" :isDarkMode="isDarkMode" />

    <main class="main-content">
      <!-- Show these only on homepage (/) -->
      <LandingPage v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <understanding-sickle-cell v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <AboutUs v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <OurServices v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <OurImpact v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <FrequentlyAsked v-if="$route.path === '/'" :isDarkMode="isDarkMode" />
      <Partners v-if="$route.path === '/'" :isDarkMode="isDarkMode" />

      <!-- All routes (including NotFound or dashboard) render here -->
      <router-view />
    </main>

    <!-- Hide Footer if on NotFound or hidden layout paths -->
    <Footer v-if="!hideLayout" :isDarkMode="isDarkMode" />
  </div>
</template>

<script>
import { useRoute } from "vue-router";
import { computed } from "vue";

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

  setup() {
    const route = useRoute();

    // Base hidden layout paths
    const baseHiddenPaths = [
      '/dashboard',
      '/dashboard/posts',
      '/admin',
      '/dashboard/post-create',
      '/login'
    ];

    // Computed property to determine if layout should be hidden
    const hideLayout = computed(() => {
      return (
        baseHiddenPaths.includes(route.path) ||
        /^\/dashboard\/posts\/\d+\/edit$/.test(route.path) || // match /dashboard/posts/ANY_ID/edit
        route.name === 'NotFound'
      );
    });

    return { route, hideLayout };
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
