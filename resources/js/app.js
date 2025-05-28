import "./bootstrap";

import "bootstrap/dist/css/bootstrap.min.css";
import "@fortawesome/fontawesome-free/css/all.min.css";
import '@fortawesome/fontawesome-free/css/all.css'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css'


import { createApp } from "vue";
import router from "./router";
import App from "./components/App.vue";

const app = createApp(App);
const options = {
  confirmButtonColor: '#41b882',
  cancelButtonColor: '#ff7674',
};
app.use(VueSweetalert2,options);
app.use(router);

app.mount("#app");
