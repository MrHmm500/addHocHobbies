<template>
    Contact: <br />
    {{ tradeRequest.name }}<br />
    {{ tradeRequest.email }}<br />
    {{ tradeRequest.phone }}<br />
    {{ tradeRequest.description }}
</template>

<script>
export default {
    name: 'TradeRequest',
    props: ['tradeRequest'],
    data () {
        return {
            'tradeRequests': [],
        }
    },
}
</script>
