import Vue from 'vue';
import VueAgile from 'vue-agile'

window.Vue = Vue;
Vue.component('agile', VueAgile)

require('./bootstrap');
