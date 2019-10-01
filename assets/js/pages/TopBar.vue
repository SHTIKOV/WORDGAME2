<template>
    <div>
        <div class="nav-wrapper">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Главная</router-link>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/SHTIKOV" 
                        class="nav-link"
                        target="_blank">Автор</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TopBar"
    }
</script>

<style scoped>
    .nav-wrapper {
        padding: 10px;
    }
</style>