
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueCarousel from 'vue-carousel'
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.use(VueCarousel)

const app = new Vue({
    el: '#app',
    methods: {
        show(modal) {
            this.$modal.show(modal)
        },
        hide(modal) {
            this.$modal.hide(modal)
        }
    }
});
