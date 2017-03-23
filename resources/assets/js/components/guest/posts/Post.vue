<template>
	<div class="col-md-6">
        <article>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.
                <a class="read-more" href="#">
                    read more
                    <i class="fa fa-angle-right">
                    </i>
                </a>
            </p>
        </article>
    </div>
</template>

<script>
	export default{
		props: ['post']
	}
</script>
