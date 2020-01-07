/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("blog-brief", require("./components/blog-brief.vue").default);
Vue.component("blog", require("./components/blog.vue").default);
Vue.component(
  "gala-dinner",
  require("./components/lottie-gala-dinnaer.vue").default
);
// Vue.component('abstract-upload', require('./components/abstract-upload.vue').default);
Vue.component(
  "flash-message",
  require("./components/flash-message.vue").default
);
Vue.component("messages", require("./components/messages.vue").default);
Vue.component(
  "message-display",
  require("./components/message-display.vue").default
);
Vue.component(
  "committee",
  require("./components/scientific-committee.vue").default
);
Vue.component("abstracts", require("./components/abstracts.vue").default);
Vue.component(
  "abstract-display",
  require("./components/abstract-display.vue").default
);

const app = new Vue({
  el: "#app"
});
