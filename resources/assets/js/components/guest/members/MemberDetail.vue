<template lang="html">
		<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Member</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>{{ member.name }}</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">
							<div class="owl-carousel" data-plugin-options='{"items": 1}'>
								<div>
									<div class="thumbnail">
										<img :src="member.avatar_image" class="img-responsive" alt="" height="300">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img :src="member.avatar_image" class="img-responsive" alt="" height="300">
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-8">

							<h2 class="shorter">{{ member.name }}</h2>
							<h4>{{ member.major }}</h4>

							<span class="thumb-info-social-icons">
								<a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
								<a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
								<a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
							</span>
							<p>{{ member.bio }}</p>
						</div>
					</div>
					<hr class="tall" />
					<div class="row center">
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="75" data-plugin-options='{"barColor": "#E36159"}'>
									<strong>HTML/CSS</strong>
									<label><span class="percent">75</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="85" data-plugin-options='{"barColor": "#0088CC", "delay": 300}'>
									<strong>Design</strong>
									<label><span class="percent">85</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="60" data-plugin-options='{"barColor": "#2BAAB1", "delay": 600}'>
									<strong>WordPress</strong>
									<label><span class="percent">60</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="95" data-plugin-options='{"barColor": "#734BA9", "delay": 900}'>
									<strong>Photoshop</strong>
									<label><span class="percent">95</span>%</label>
								</div>
							</div>
						</div>

					</div>

				</div>

				<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: '/user/img/parallax-transparent.jpg';">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">

								<div class="row">
									<div class="owl-carousel" data-plugin-options='{"items": 1}'>
										<div>
											<blockquote>
												<p><i class="fa fa-quote-left"></i> Joe Doe is the smartest guy I ever met, he provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												<span>- Mark Doe</span>
											</blockquote>
										</div>
										<div>
											<blockquote>
												<p><i class="fa fa-quote-left"></i> He provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												<span>- Joseph Doe</span>
											</blockquote>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<h3 class="short">My <strong>Work</strong></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>

						<ul class="portfolio-list">
							<li class="col-md-3" v-for="project in member.projects">
								<div class="portfolio-item thumbnail">
									<a href="portfolio-single-project.html" class="thumb-info">
										<img alt="" class="img-responsive" v-bind:src="'/user/img/projects/' + project.image.main">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">{{ project.type }}</span>
											<span class="thumb-info-type">{{ project.name }}</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
						</ul>

					</div>

				</div>

			</div>
</template>

<script>
    export default {
        data(){
            return {
                member:[],
            }

        },
        created(){
            this.fetchMember();
        },
        methods:{
            fetchMember(){
                this.$http.get('/api/guest/members/' + this.$route.params.memberSlug).then(response => {
                    this.member = response.data.member;
                });
            }
        }
    }
</script>