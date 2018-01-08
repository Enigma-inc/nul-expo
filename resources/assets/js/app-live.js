/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vuetify from 'vuetify';
import Vuebar from 'vuebar';


Vue.use(Vuetify)
Vue.use(Vuebar)

Vue.component('layout',require("./components/live/layout.vue")) ;

const app = new Vue({
    el: '#app'
});