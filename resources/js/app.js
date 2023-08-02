import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import Router from "./components/Router.vue";
import VueRouter from "vue-router";

import axios from 'axios';

window.axios = axios;

const app = createApp({
    router: VueRouter,
    components: {
        Router
    }
});

app.mount("#app");
