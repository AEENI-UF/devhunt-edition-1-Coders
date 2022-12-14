/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import Vue from "vue";
import router from "./routes/router";
import VueToast from "vue-toast-notification";
import axios from 'axios';
import "vue-toast-notification/dist/theme-sugar.css";
import vuetify from "./../plugins/vuetify";

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import DataTable from "laravel-vue-datatable";
Vue.use(DataTable);

Vue.use(VueToast);
Vue.component(
    "menu-component",
    require("./components/client/menu/MenuComponent.vue").default
);

Vue.component(
    "footer-component",
    require("./components/client/footer/FooterComponent.vue").default
);

Vue.component(
    "base-component",
    require("./components/BaseComponent.vue").default
);
Vue.component(
    "compte-datatable",
    require("./components/Admin/CompteDatatable.vue").default
);
Vue.component(
    "user-datatable",
    require("./components/Admin/UserDatatable.vue").default
);
Vue.component(
    "niveau-datatable",
    require("./components/Admin/NiveauDatatable.vue").default
);
Vue.component(
    "config-datatable",
    require("./components/Admin/ConfigDatatable.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router,
    vuetify,
});
