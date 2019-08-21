require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExampleComponent from "./components/ExampleComponent";
import User from "./components/User";

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        {
            path: '/',
            components :{
                default: ExampleComponent,
                user : User
            },
            props:{
                user : true
            }
        },
        { path: '/user', component: User }
    ]
});

const app = new Vue({
    router
}).$mount('#app')
