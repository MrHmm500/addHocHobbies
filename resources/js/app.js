import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import Router from "./components/Router.vue";
import VueRouter from "vue-router";

const app = createApp({
    router: VueRouter,
    components: {
        Router
    }
});

app.mount("#app");
