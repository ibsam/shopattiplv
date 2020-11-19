/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.$ = window.jQuery = require('jquery');
window.Vue = require('vue');

import MyCom from './components/MyCom.vue'; 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
<<<<<<< HEAD
Vue.component('my-com', require('./components/MyCom.vue'));
=======
// Vue.component('my-com', require('./components/MyCom.vue'));
>>>>>>> a733936ce45c4a94d222cf937b54ca2b3377b5a5
// Vue.component('my-com', MyCom);
// Vue.component('ProductDetail', require('./components/ProductDetail.vue').default);
Vue.component('productdetail', require('./components/ProductDetail.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
