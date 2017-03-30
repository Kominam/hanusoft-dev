require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.filter('chunk',(array, length) => {
  return _.chunk(array,length);
});
Vue.filter('substring',(string,value) => {
	return string.substring(0, value) + '...';
});


Vue.component('myfooter', require('./components/guest/GuestFooter.vue'));
Vue.component('Projects', require('./components/guest/projects/Projects.vue'));
Vue.component('recent-posts', require('./components/guest/posts/Recent.vue'));
Vue.component('Members', require('./components/guest/members/Members.vue'));

const app = new Vue({
    el: '#app',
});

