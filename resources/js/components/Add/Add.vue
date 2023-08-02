<template>
    name: <input type="text" v-model="tradeRequest.name" class="name" /><br />
    email: <input type="email" v-model="tradeRequest.email" class="email" /><br />
    phone: <input type="text" v-model="tradeRequest.phone" class="phone" /><br />
    description: <input type="text" v-model="tradeRequest.description" class="description" /><br />
    photo: <input type="text" v-model="tradeRequest.photo" class="photo" />
    <input @click="saveTradeRequest()"  type="button"/>
</template>

<script>
export default {
    name: 'add',
    data () {
        return {
            'tradeRequest': {
                'name': '',
                'email': '',
                'phone': '',
                'description': '',
                'photo': '',
            }
        }
    },
    methods: {
        saveTradeRequest() {
            axios.post('/api/tradeRequests', this.tradeRequest).then((response) => {
                if (response.code === 200) {
                    this.$emit('change-route', 'overview')
                } else {
                    alert(response.message)
                }
            })
        }
    }
}
</script>
