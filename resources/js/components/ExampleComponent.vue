<template>
<div >
    <router-link></router-link>
    <router-view></router-view>
</div>
</template>

<script>
    export default {
        name:'exemple',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
