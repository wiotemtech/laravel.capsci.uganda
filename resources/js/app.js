import "./bootstrap";

import "bootstrap/dist/css/bootstrap.min.css";
import "@fortawesome/fontawesome-free/css/all.min.css";
import '@fortawesome/fontawesome-free/css/all.css'


import { createApp } from "vue";
import router from "./router";
import App from "./components/App.vue";

const app = createApp(App);
app.use(router);

app.mount("#app");
