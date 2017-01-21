
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter =  require('vue-router');
import Members from './components/guest/Members.vue';
import Index from './components/guest/Index.vue';
import Index from './components/guest/Main.vue';

Vue.use(VueRouter);
Vue.use(VueResource);

var router = new VueRouter({
     history: false
});

router.map({
	'/' : {
		components: Index
	},
	'/members': {
		components: Members
	}
});

Vue.http.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;

var App = Vue.extend({});

router.start(App,'#app');

Vue.filter('str_limit', function (string, value) {
  return string.substring(0, value) + '...';
});

