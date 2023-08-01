<template>
    {{'hekkien'}}
    <button v-on:Click="setParentData"></button>
</template>

<script>
export default {
    name: 'HekkingChild',
    data () {
        return {
        }
    },
    methods: {
        setParentData () {
            this.$emit('set-route-data', 'child')
        }
    }
}
</script>
