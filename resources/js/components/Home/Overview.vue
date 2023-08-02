<template>
    <div class="row">
        <div v-for="tradeRequest in tradeRequests" class="col-sm-4">
            <trade-request
                :tradeRequest="tradeRequest"
            ></trade-request>
        </div>
    </div>
</template>

<script>
import TradeRequest from "./TradeRequest.vue";
export default {
    name: 'Overview',
    components: {
        TradeRequest
    },
    data () {
        return {
            'tradeRequests': [],
        }
    },
    created() {
        axios.get('/api/tradeRequests/requestOverview').then(response => {
            if (response.code === 200) {
                this.tradeRequests = response.tradeRequests
            } else {
                alert(response.errors)
            }
        });
    }
}
</script>
