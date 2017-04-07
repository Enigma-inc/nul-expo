
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('blog-brief', require('./components/blog-brief.vue'));
Vue.component('blog', require('./components/blog.vue'));
Vue.component('accommodation',require('./components/accommodation.vue'));

const app = new Vue({
    el: '#app'
});
