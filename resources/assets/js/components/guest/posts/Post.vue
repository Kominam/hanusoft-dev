<template lang="html">
<div class="main" role="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Posts
                            </a>
                        </li>
                        <li class="active">
                            {{post.title}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        {{post.title}}
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post">
                        <div class="post-date">
                            <span class="day">
                                {{post.created_day}}
                            </span>
                            <span class="month">
                                {{post.created_month}}
                            </span>
                        </div>
                        <div class="post-content">
                            <h2>
                                <a href="#">
                                    {{post.title}}
                                </a>
                            </h2>
                            <div class="post-meta">
                                <span>
                                    <i class="fa fa-user">
                                    </i>
                                    By
                                    <a href="#">
                                        {{user.name}}
                                    </a>
                                </span>
                                <span>
                                    <i class="fa fa-tag">
                                    </i>
                                    <a href="#">
                                        {{category.name}}
                                    </a>
                                </span>
                                <span>
                                    <i class="fa fa-comments">
                                    </i>
                                    <a href="#">
                                        {{post.comment_count}} Comments
                                    </a>
                                </span>
                            </div>
                            <p v-html="post.content">
                            </p>
                            <div class="post-block post-share">
                                <h3>
                                    <i class="fa fa-share">
                                    </i>
                                    Share this post
                                </h3>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count">
                                    </a>
                                    <a class="addthis_button_tweet">
                                    </a>
                                    <a class="addthis_button_pinterest_pinit">
                                    </a>
                                    <a class="addthis_counter addthis_pill_style">
                                    </a>
                                </div>
                            </div>
                            <div class="post-block post-author clearfix">
                                <h3>
                                    <i class="fa fa-user">
                                    </i>
                                    Author
                                </h3>
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img :src="user.avatar_image" alt="">
                                        </img>
                                    </a>
                                </div>
                                <p>
                                    <strong class="name">
                                        <a href="#">
                                            {{user.name}}
                                        </a>
                                    </strong>
                                </p>
                                <p>
                                    {{user.bio}}
                                </p>
                            </div>
                            <comments>
                            </comments>
                            <!-- COmment Box Here -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<RightSideBar>
</RightSideBar>

</template>
<script>
  import RightSideBar from './RightSideBar.vue';
  import Comments from './Comments.vue';
  export default {
    data() {
      return {
        post: [],
        user:[],
        category:[],
        comments:[]
      }
    },
    components: { RightSideBar },
    created() {
      this.fetchPost();
    },
    methods: {
      fetchPost() {
        this.$http.get('/api/guest/posts/' + this.$route.params.postSlug).then(response => {
          this.post = response.data.post;
          this.user = response.data.post.user;
          this.category = response.data.post.category;
          this.comments = response.data.post.comments;
        });
      }
    }
  }
</script>

