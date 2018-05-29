import Vue from 'Vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
 
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios,axios);
import App from './App.vue';
import outroutes from './routers';

const router = new VueRouter({mode:'history', routes: outroutes});
new Vue(Vue.util.extend({router},App)).$mount('#app');