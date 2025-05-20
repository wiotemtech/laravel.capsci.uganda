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
    children: [
      {
        path: "",                // default child route for /dashboard
        component: DashboardWelcome,
      },
      {
        path: "posts",           // /dashboard/posts
        component: BlogPost,
      },
      {
        path: "post-create",
        component:CreatePost,
      }
    ],
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

export default router;
