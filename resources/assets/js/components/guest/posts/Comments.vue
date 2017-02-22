<template lang="html">
	<div class="post-block post-comments clearfix">
            <h3><i class="fa fa-comments"></i>Comments>({{post.comment_count}})</span></h3>
               <div v-if="post.comment_count===0"><h5>Be the first person comment on this post</h5></div>
            <ul class="comments" v-esle>
                 <li v-for="comment in comments">
                    <div class="comment">
                        <div class="img-thumbnail">
                            <img class="avatar" alt="" src="/user/User-Default.jpg">
                        </div>
                        <div class="comment-block">
                            <div class="comment-arrow"></div>
                            <span class="comment-by">
                            <strong>{{comment.name}}</strong>
                            <span class="pull-right">
                            <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                            </span>
                            </span>
                            <p>{{comment.body}}</p>
                            <span class="date pull-right">{{comment.created_at}}</span>
                        </div>
                    </div>
                 <!--  Reply comments here -->
                </li>
            </ul>
            
        </div>
</template>

<script>
	export default {
		props: ['comments', 'post']
	}
</script>