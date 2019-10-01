<template>
    <div>
        <top-bar v-if="$route.name !=='game'"/>
        <router-view></router-view>
    </div>
</template>

<script>
    import TopBar from '../pages/TopBar';

    export default {
        name: "App",
        components: {
            TopBar
        }
    }
</script>

<style scoped>

</style>