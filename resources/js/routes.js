import Vue from 'vue';

const fileupload = Vue.component('fileupload', require('./components/fileupload.vue').default);

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '/',
            component:fileupload
        },
          
    ]
}