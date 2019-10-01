<template>
    <div>
        <div class="jumbotron">
            <h1 class="display-4">WORD GAME 2</h1>
            <p class="lead">Игра для компании.</p>
            <hr class="my-4">
            <p class="lead">
                <router-link class="btn btn-success btn-lg" to="/game">Начать игру</router-link>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>

<style scoped>
    b {
        font-weight: 700;
    }
    .jumbotron {
        text-align: center;
        background-color: #fff;
    }
</style>