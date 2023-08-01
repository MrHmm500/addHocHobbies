<template>
    <div class="container">
        <div class="menu d-flex">
            <div class="menuItem" v-for="route in routes">
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
            >
            </component>
        </div>
    </div>
</template>

<script>
import Child from "./Home/Child.vue";
import HekkingChild from "./Home/HekkingChild.vue";
import routes from "../routes.json";
export default {
    data () {
        return {
            activeRoute: 'child',
            routes: routes
        }
    },
    components: {
        Child,
        HekkingChild
    },
    methods: {
        updateRoute (routeName) {
            this.activeRoute = routeName;
        }
    }
}
</script>
