<template>
   <div>
    <div class="col-md-6" v-for="posts in chunkedItems">
        <article v-for="post in posts">
            <div class="date">
                <span class="day">
                    15
                </span>
                <span class="month">
                    Jan
                </span>
            </div>
            <h4>
                <a href="blog-post.html">
                    {{ post.title | substring(15)}}
                </a>
            </h4>
            <p>
                {{ post.content | substring(40)}}
                <a class="read-more" href="#">
                    read more
                    <i class="fa fa-angle-right">
                    </i>
                </a>
            </p>
        </article>
    </div>
</div>
</template>
<script>
    export default {
        data(){
            return {
                recentPosts:[]
            }
        },
        created() {
            this.fetchRecentPosts();
        },
        methods: {
            fetchRecentPosts(){
                axios.get('/api/guest/posts/recent').then(response => this.recentPosts = response.data.data);
            }
        },
        computed: {
           chunkedItems () {
             return _.chunk(this.recentPosts,2)
           }
        }
    }
</script>