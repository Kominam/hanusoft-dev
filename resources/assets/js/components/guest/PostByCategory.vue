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
                    <h1>Large Image</h1>
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
                            <span class="day">{{ post.created_at}}</span>
                            <span class="month">
                            {{post.created_at}}</span>
                        </div>
                        <div class="post-content">
                            <h2><a href='#'>{{post.title}}</a></h2>
                            <p v-html="substring(post.content, 750)"></p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">{{post.user.name}}</a> </span>
                                <span><i class="fa fa-tag"></i> <a href='#'>{{post.category.name}}</a></span>
                                <span><i class="fa fa-comments"></i> <a href="#">{{post.comment_count}} Comments</a></span>
                                <a href="#" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    </li>
                  </paginate>
                   <paginate-links for="posts" :show-step-links="true" class="pagination pagination-lg pull-right"></paginate-links>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <form action="#" method="POST">
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="keyword" id="keyword" type="text" required>
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <hr />
                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                          <li v-for="category in categories"> <router-link :to="{ name: 'post.byCategory', params: { categorySlug: category.slug }}">{{category.name}}</router-link></li>
                    </ul>
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                            <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                               
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                              
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <h4>About Us</h4>
                    <p>Hanusoft is an IT club, working in Faculty of Information Technology. Taking part in Hanusoft if you have passion with programming. </p>
                </aside>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                posts:[],
                categories:[],
                paginate: ['posts']
            }

        },
        created(){
            this.showPostByCategory();
            this.fetchCategory();
        },
        methods:{
            fetchCategory(){
                this.$http.get('api/guest/categories').then(response => {
                    this.categories = response.data.categories;
                });
            },
            showPostByCategory(slugCategory){
                 this.$http.get('api/guest/categories/' + this.$route.params.categorySlug).then(response => {
                    this.posts = response.data.category.posts;
                });
            },
            substring(string,value){
                return string.substring(0, value) + '...';
            }
        }
    }
</script>