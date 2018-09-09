
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('selectric');
// window.Vue = require('vue');
$('.js-selectric').selectric({
    labelBuilder: function(currItem) {
        let icon = currItem.element.parents(".js-selectric").attr("data-icon");
        return ((icon && icon.length > 4)? icon : '') + currItem.text;
    }
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

(function ($) {
    let navbarHamburger = $(".js-navbar__hamburger");
    let navbarCollapse = $(".js-navbar-collapse");
    let navbarBackground = $(".js-navbar--bg-dark");
    let navbar = $(".js-navbar");

    navbarHamburger.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
        navbar.toggleClass("show");
    });
    navbarBackground.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
        navbar.toggleClass("show");
    });
})($);