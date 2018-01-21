/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vuetify from 'vuetify';
import Vuebar from 'vuebar';
import Carousel3d  from 'vue-carousel-3d';
import store from './components/live/store';
import  mapActions from 'vuex';


Vue.use(Vuetify)
Vue.use(Vuebar)
Vue.use(Carousel3d)

Vue.component('layout',require("./components/live/layout.vue")) ;

const app = new Vue({
    el: '#app',
    store
});