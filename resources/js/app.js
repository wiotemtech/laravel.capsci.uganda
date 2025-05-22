import "./bootstrap";

import "bootstrap/dist/css/bootstrap.min.css";
import "@fortawesome/fontawesome-free/css/all.min.css";
import '@fortawesome/fontawesome-free/css/all.css'
import swal from "sweetalert2"

window.swal = swal 
const toast = swal.mixin({
     toast: true,
     position: "top-end",   
     showConfirmButton:false,
     timer:3000,
     timerProgressBar:true   
})
window.toast = toast

import { createApp } from "vue";
import router from "./router";
import App from "./components/App.vue";

const app = createApp(App);
app.use(router);

app.mount("#app");
