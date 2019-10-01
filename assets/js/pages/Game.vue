<template>
    <div>
        <router-link class="btn btn-primary btn-lg" to="/">На главную</router-link>
        <div v-if="game">
            {{game.name}}
        </div>
    </div>
</template>

<script>
    import Game from '../api/game';
    
    export default {
        name: "Game",
        data () {
            return {
                game: null,
            };
        },
        mounted () {
            let self = this;
            Game.create ()
                .then (function (response) {
                    self.game = response.data;
                });
        },
        methods: {
            async getGame () {
                let response = await Game.create (),
                    newGame = response.data;
                console.log (newGame);
            }
        }
    }
</script>

<style scoped>

</style>