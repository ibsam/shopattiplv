/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//window.$ = window.jQuery = require('jquery');
window.Vue = require('vue');
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"
import poductData from "./store/product"


const store = new Vuex.Store(
   storeData,
   poductData
)
// Vue.use(require('vue-resource'));
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
// import MyCom from './components/MyCom.vue';
// import Vuex from 'vuex';


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//PRODUCTS RELATED components
// Vue.use(Vuex);

// import storeData from "./store/index";

// const store = new Vuex.Store(
//     storeData
//  )

Vue.component('shop', require('./components/Shop.vue'));
// Vue.component('category-com', require('./components/Category.vue'));
Vue.component('brand-com', require('./components/Brand.vue'));
Vue.component('productsingle', require('./components/Product-Single.vue'));
//PRODUCTS RELATED components END


//cart components
Vue.component('shopping-cart', require('./components/CartComponent.vue'));
Vue.component('headercart', require('./components/HeaderCart.vue'));
Vue.component('test', require('./components/TESTs.vue'));
//cart components END

//shopat tip component end
Vue.component('tipmart-shop', require('./components/tipmart/TipMartShop.vue'));
//shopat tip component start

//Model 
Vue.component('product-model',require('./components/models/SighnInSighnUpModel.vue'));


const app = new Vue({
    el: '#app',
    store,
});
