
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./manage');
window.Vue = require('vue');
import Vue from 'vue';
import Buefy from 'buefy';
// import 'buefy/lib/buefy.css';

Vue.use(Buefy);
// Vue.component('example-component', require('./components/ExampleComponent.vue'));






//
// $(document).ready(function(){
//   $('div.navbar-item.has-dropdown').hover(function(e){
//       $(this).toggleClass('is-active');
//
//     });
//
// });

// document.addEventListener('DOMContentLoaded', function () {
//
//   // Get all "navbar-burger" elements
//   var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
//
//   // Check if there are any nav burgers
//   if ($navbarBurgers.length > 0) {
//
//     // Add a click event on each of them
//     $navbarBurgers.forEach(function ($el) {
//       $el.addEventListener('click', function () {
//
//         // Get the target from the "data-target" attribute
//         var target = $el.dataset.target;
//         var $target = document.getElementById(target);
//
//         // Toggle the class on both the "navbar-burger" and the "navbar-menu"
//         $el.classList.toggle('is-active');
//         $target.classList.toggle('is-active');
//
//       });
//     });
//   }
//
// });




// const app = new Vue({
//     el: '#app'
// });
