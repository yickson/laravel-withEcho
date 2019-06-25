/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';

window.Vue = Vue;

Vue.component('chat-box', require('./components/ChatBox.vue').default);
//console.log('Iniciando');
const app = new Vue({
    el: '#app'
});
