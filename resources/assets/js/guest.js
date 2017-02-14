var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter =  require('vue-router');

import Members from './components/guest/Members.vue';
import Index from './components/guest/Index.vue';
import MemberDetail from './components/guest/MemberDetail.vue';
import Projects from './components/guest/Projects.vue';

Vue.use(VueRouter);
Vue.use(VueResource);

var router = new VueRouter({
  routes: [
    { path: '/', name: 'index', component: Index },
    { path: '/members', name: 'member.index', component: Members },
    { path: '/members/:memberSlug',name: 'member.show',component: MemberDetail },
    { path: '/projects', name: 'project.index', component: Projects },
  ],
  mode: 'history'
});

const app = new Vue({
    el: '#app',
    router
});

Vue.filter('str_limit', function (string, value) {
	return string.substring(0, value) + '...';
});
