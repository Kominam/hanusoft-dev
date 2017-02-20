var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter =  require('vue-router');

import Members from './components/guest/members/Members.vue';
import Index from './components/guest/Index.vue';
import MemberDetail from './components/guest/members/MemberDetail.vue';
import Projects from './components/guest/projects/Projects.vue';
import ProjectDetail from './components/guest/projects/ProjectDetail.vue';
import PostIndex from './components/guest/posts/PostIndex.vue';
import PostByCategory from './components/guest/PostByCategory.vue';
import VuePaginate from 'vue-paginate';

Vue.use(VueRouter);
Vue.use(VuePaginate);
Vue.use(VueResource);

var router = new VueRouter({
  routes: [
    { path: '/', name: 'index', component: Index },
    { path: '/members', name: 'member.index', component: Members },
    { path: '/members/:memberSlug',name: 'member.show',component: MemberDetail },
    { path: '/projects', name: 'project.index', component: Projects },
    { path: '/projects/:projectSlug',name: 'project.show',component: ProjectDetail },
    { path: '/posts',name: 'post.index',component: PostIndex },
    { path: '/:categorySlug/posts',name: 'post.byCategory',component: PostByCategory },
  ]
});

const app = new Vue({
    el: '#app',
    router
});

Vue.filter('str_limit', function (string, value) {
	return string.substring(0, value) + '...';
});
