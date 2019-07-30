/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import 'bootstrap-css-only/css/bootstrap.min.css';
import 'mdbvue/build/css/mdb.css';

Vue.use(Vuetify)
Vue.use(VueRouter)
import Integrasi from './components/content/Integrasi.vue'
import Memulai from './components/content/Memulai.vue'
import AturanApi from './components/content/AturanApi.vue'
import DataApi from './components/content/DataApi.vue'
import Beranda from './components/content/Beranda.vue'
import Bantuan from './components/content/Bantuan.vue'

import Create from './components/Create.vue'
import Read from './components/Read.vue'
import Update from './components/Update.vue'

import RegisterName from './components/auth/RegisterName.vue'
import RegisterEmail from './components/auth/RegisterEmail.vue'
import RegisterPhoto from './components/auth/RegisterPhoto.vue'
import RegisterLocation from './components/auth/RegisterLocation.vue'


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    { path: '/integrasi', component: Integrasi },
    { path: '/aturanApi', component: AturanApi },
    { path: '/beranda', component: Beranda },
    { path: '/memulai', component: Memulai },
    { path: '/bantuan', component: Bantuan },
    { path: '/dataApi', component: DataApi },
    { path: '/read/:id', component: Read, name:"readPost" },
    { path: '/:id/edit', component: Update, name:"editPost" },
    { path: '/create', component: Create },
    { path: '/register/name', component: RegisterName },
    { path: '/register/email', component: RegisterEmail },
    { path: '/register/photo', component: RegisterPhoto },
    { path: '/register/location', component: RegisterLocation },
    
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})
  
const app = new Vue({
    router
  }).$mount('#app')