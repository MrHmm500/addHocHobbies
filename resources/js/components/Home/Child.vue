<template>
    {{'child'}}
    <button v-on:Click="setParentData"></button>
</template>

<script>
export default {
    name: 'Child',
    data () {
        return {
        }
    },
    methods: {
        setParentData () {
            this.$emit('set-route-data', 'hekkingChild')
        }
    }
}
</script>
