 <template lang="html">
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
 </template>

<script>
    export default {
        data(){
            return {
                categories:[],
            }

        },
        created(){
            this.fetchCategory();
        },
        methods:{
            fetchCategory(){
                this.$http.get('api/guest/categories').then(response => {
                    this.categories = response.data.categories;
                });
            },
        }
    }
</script>