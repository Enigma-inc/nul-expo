/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueGoodTable from 'vue-good-table';
import VueFormWizard from 'vue-form-wizard';
import 'vue-form-wizard/dist/vue-form-wizard.min.css';
import Vuelidate from 'vuelidate';
import VueSweetalert2 from 'vue-sweetalert2';

Vue.use(VueSweetalert2);
Vue.use(Vuelidate)
Vue.use(VueFormWizard);
Vue.use(VueGoodTable);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('event-buttons', require('./components/live/event-buttons.vue'));
Vue.component('nulistice-admin-page', require('./components/nulistice'));
Vue.component('reris-admin-page', require('./components/reris'));
Vue.component('general-events-admin-page', require('./components/general'));
Vue.component('upload-gallery-image',require('./components/gallery/upload.vue'));
Vue.component('add-edit-nulistice-event',require('./components/nulistice/addEdit.vue'));

const app = new Vue({
    el: '#app'
});