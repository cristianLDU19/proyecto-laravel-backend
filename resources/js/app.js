
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('modalidades', require('./components/modalidades.vue'));
Vue.component('recetas', require('./components/recetas.vue'));
Vue.component('pregunta-componente', require('./components/pregunta-componente.vue'));
Vue.component('detalle-receta', require('./components/detalle-receta.vue'));


const app = new Vue({
    el: '#app',

});

