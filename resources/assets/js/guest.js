var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter =  require('vue-router');

import Members from './components/guest/members/Members.vue';
import Index from './components/guest/Index.vue';
import About from './components/guest/About.vue';
import Service from './components/guest/Service.vue';
import Contact from './components/guest/Contact.vue';
import MemberDetail from './components/guest/members/MemberDetail.vue';
import Projects from './components/guest/projects/Projects.vue';
import ProjectDetail from './components/guest/projects/ProjectDetail.vue';
import PostIndex from './components/guest/posts/PostIndex.vue';
import Post from './components/guest/posts/Post.vue';
import PostByCategory from './components/guest/PostByCategory.vue';
import VuePaginate from 'vue-paginate';
import VeeValidate from 'vee-validate';
import { default as swal } from 'sweetalert2';

Vue.use(VueRouter);
Vue.use(VuePaginate);
Vue.use(VueResource);
Vue.use(VeeValidate);

var router = new VueRouter({
  routes: [
    { path: '/', name: 'index', component: Index },
    { path: '/about', name: 'about', component: About },
    { path: '/service', name: 'service', component: Service },
    { path: '/members', name: 'member.index', component: Members },
    { path: '/members/:memberSlug',name: 'member.show',component: MemberDetail },
    { path: '/projects', name: 'project.index', component: Projects },
    { path: '/projects/:projectSlug',name: 'project.show',component: ProjectDetail },
    { path: '/posts',name: 'post.index',component: PostIndex },
    { path: '/posts/:postSlug',name: 'post.show',component: Post },
    { path: '/:categorySlug/posts',name: 'post.byCategory',component: PostByCategory },
    { path: '/contact', name: 'contact', component: Contact },
  ]
});

const app = new Vue({
    el: '#app',
    router
});

Vue.filter('str_limit', function (string, value) {
	return string.substring(0, value) + '...';
});
