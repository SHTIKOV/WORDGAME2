import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home';
import Game from './pages/Game';

Vue.use (VueRouter);

const router = new VueRouter ({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes:[
        {path:'/', name:'home', component:Home},
        {path:'/game', name:'game', component:Game},
    ]
});

export default router;