import { createRouter, createWebHistory } from "vue-router";

import About from "./views/Resources.vue";
import Blogs from "./views/Blogs.vue";
import Gallery from "./views/Gallery.vue";
import BordMembers from "./views/BoardMembers.vue";
import ManagementMembers from "./views/ManagementMembers.vue";
import Events from "./views/Events.vue";
import Contact from "./views/Contact.vue";
import HeaderBanner from "./components/HeaderBanner.vue";

const routes = [
    { path: "/", component: HeaderBanner },
    { path: "/resources", component: About },
    { path: "/blogs", component: Blogs },
    { path: "/gallery", component: Gallery },
    { path: "/board-members", component: BordMembers },
    { path: "/management-members", component: ManagementMembers },
    { path: "/events", component: Events },
    { path: "/contact-us", component: Contact },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
