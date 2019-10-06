


require('./bootstrap');

import  Vue from 'vue';
import Vuetify from "vuetify";


Vue.use(Vuetify);

import User from './Helpers/User'
window.User=User

Vue.component('AppHome', require('./components/AppHome.vue').default);
import router from './Router/router.js'
const app = new Vue({
    el:'#app',
    router
});
