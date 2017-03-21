require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('myfooter', require('./components/guest/GuestFooter.vue'));
import Projects from './components/guest/Projects.vue';

const app = new Vue({
    el: '#app',
    components: {Projects}
});
