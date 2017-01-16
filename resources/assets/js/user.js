
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
import Members from './components/Members.vue';
require('./bootstrap');

Vue.filter('str_limit', function (string, value) {
	return string.substring(0, value) + '...';
});
Vue.http.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;

const app = new Vue({
    el: '#app',
    components: { Members },
});
