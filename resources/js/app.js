require('./bootstrap');
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
window.Vue = require('vue');

import VueRouter from 'vue-router'
import routes from './routes.js';

Vue.use(VueRouter);

new Vue({
    el: '#app',
    router: new VueRouter(routes)

});
