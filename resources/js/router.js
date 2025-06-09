import { createRouter, createWebHistory } from "vue-router";

import About from "./views/Resources.vue";
import Blogs from "./views/Blogs.vue";
import Gallery from "./views/Gallery.vue";
import BordMembers from "./views/BoardMembers.vue";
import ManagementMembers from "./views/ManagementMembers.vue";
import Events from "./views/Events.vue";
import Contact from "./views/Contact.vue";
import HeaderBanner from "./components/HeaderBanner.vue";

import Dashbord from "./Auth/Dashbord.vue";
import NotFound from "./views/NotFound.vue";
import BlogPost from "./Auth/BlogPost.vue";
import DashboardWelcome from "./Auth/DashboardWelcome.vue";
import CreatePost from "./Auth/CreatePost.vue";
import LogIn from "./Auth/LogIn.vue";

const routes = [
  { path: "/", component: HeaderBanner },
  { path: "/resources", component: About },
  { path: "/blogs", component: Blogs },
  { path: "/gallery", component: Gallery },
  { path: "/board-members", component: BordMembers },
  { path: "/management-members", component: ManagementMembers },
  { path: "/events", component: Events },
  { path: "/contact-us", component: Contact },

  {
    path: "/dashboard",
    component: Dashbord,
    // meta: { requiresAuth: true },
    children: [
      { path: "", component: DashboardWelcome },
      { path: "posts", component: BlogPost },
      { path: "post-create", component: CreatePost },
      {
        path: "posts/:id/edit",
        name: "blogs.edit",
        component: CreatePost,
      },
    ],
  },

  {
    path: "/login",
    name: "login",
    component: LogIn,
  },

  {
    path: "/:pathMatch(.*)*",
    name: "NotFound",
    component: NotFound,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

// Navigation guard
router.beforeEach((to, from, next) => {
  const isLoggedIn = !!localStorage.getItem("token"); // check token key here
  if (to.meta.requiresAuth && !isLoggedIn) {
    next("/login");
  } else {
    next();
  }
});


export default router;
