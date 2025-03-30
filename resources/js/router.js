import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./App.vue"),
    },
    {
        path: "/about-us",
        component: () => import("./components/Aboutus.vue"),
    },
    {
        path: "/settings",
        component: () => import("./components/Settings.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});