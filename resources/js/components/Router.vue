<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="menuItem col-sm" v-for="route in routes">
                <div
                    @click="updateRoute(route)"
                >
                    {{ route }}
                </div>
            </div>
        </div>
        <div class="route" v-for="route in routes">
            <component
                :is="route"
                v-if="activeRoute === route"
                @change-route="updateRoute"
            >
            </component>
        </div>
    </div>
</template>

<script>
import Overview from "./Home/Overview.vue";
import Add from "./Add/Add.vue";
import routes from "../routes.json";
export default {
    data () {
        return {
            activeRoute: 'overview',
            routes: routes
        }
    },
    components: {
        Overview,
        Add
    },
    methods: {
        updateRoute (routeName) {
            this.activeRoute = routeName;
        }
    }
}
</script>
