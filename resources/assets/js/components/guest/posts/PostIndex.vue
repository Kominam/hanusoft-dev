<template lang="html">
    <div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Posts</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Posts</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="posts_details">
                 <paginate name="posts" :list="posts" :per="5" class="paginate-list">
                    <li v-for="post in paginated('posts')">
                      <article class="post post-large" style="padding: 50px 0px 50px 0px">
                        <div class="post-date">
                            <span class="day">{{ post.created_day}}</span>
                            <span class="month">
                            {{post.created_month}}</span>
                        </div>
                        <div class="post-content">
                            <h2><a href='#'>{{post.title}}</a></h2>
                            <p v-html="substring(post.content, 750)"></p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">{{post.user.name}}</a> </span>
                                <span><i class="fa fa-tag"></i> <a href='#'>{{post.category.name}}</a></span>
                                <span><i class="fa fa-comments"></i> <a href="#">{{post.comment_count}} Comments</a></span>
                               <router-link :to="{ name: 'post.show', params: { postSlug: post.slug }}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    </li>
                  </paginate>
                   <paginate-links for="posts" :show-step-links="true" class="pagination pagination-lg pull-right"></paginate-links>
                </div>
            </div>
            <RightSideBar></RightSideBar>
        </div>
    </div>
</div>
</template>

<script>
    import RightSideBar from './RightSideBar.vue';
    export default {
        data(){
            return {
                posts:[],
                paginate: ['posts']
            }

        },
        components: {RightSideBar},
        created(){
            this.fetchAllPosts();
        },
        methods:{
            fetchAllPosts(){
                this.$http.get('api/guest/posts').then(response => {
                    this.posts = response.data.posts;
                });
            },
            substring(string,value){
                return string.substring(0, value) + '...';
            }
        }
    }
</script>