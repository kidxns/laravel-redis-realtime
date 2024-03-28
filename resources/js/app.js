require('./bootstrap');
import { createApp } from 'vue';
import HelloVue from '../components/Hello.vue';
window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
        HelloVue
    }
});
