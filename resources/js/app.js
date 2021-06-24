/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('v-nav', require('./components/NavComponent.vue').default);
Vue.component('v-nav-item', require('./components/NavItemComponent.vue').default);
Vue.component('v-header', require('./components/HeaderComponent.vue').default);
Vue.component('v-flash-wrap', require('./components/FlashWrapComponent.vue').default);
Vue.component('v-flash', require('./components/FlashComponent.vue').default);
Vue.component('v-input', require('./components/InputComponent.vue').default);
Vue.component('v-input-group', require('./components/InputGroup.vue').default);
Vue.component('v-single-wrap', require('./components/SingleInputWrap.vue').default);
Vue.component('v-double-wrap', require('./components/DoubleInputWrap.vue').default);
Vue.component('v-label', require('./components/LabelComponent.vue').default);
Vue.component('v-select', require('./components/SelectComponent.vue').default);
Vue.component('v-submit', require('./components/FormSubmit.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
