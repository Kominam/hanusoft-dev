<template lang="html">
    <div>
       <div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                     <li><a href="#">Home</a></li>
                     <li class="active">Project</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ project.name }}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="portfolio-title">
            <div class="row">
                <div class="portfolio-nav-all col-md-1" v-if="">
                   <router-link :to="{ name: 'project.index'}" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></router-link>
                </div>
                <div class="col-md-10 center">
                    <h2 class="shorter">{{ project.name }}</h2>
                </div>
                <div class="portfolio-nav col-md-1">
                   <router-link :to="{ name: 'project.show', params: { projectSlug: prevProject }}" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left" v-if="prevProject !=='#'"></i></router-link>
                   <router-link :to="{ name: 'project.show', params: { projectSlug: nextProject }}" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right" v-if="nextProject !=='#'"></i></router-link>
                  
                </div>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-4">
                <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                      
                    <div>
                        <div class="thumbnail">

                            <img alt="" class="img-responsive" v-bind:src="'/user/img/projects/'" style="width: 447px; height: 247px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-info">
                    <div class="row">
                        <div class="col-md-12 center">
                            <ul>
                                <li>
                                    <a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>{{ project.plan_start_date}}
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i> <a href="#">{{ project.type }}</a></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Project <strong>Description</strong></h4>
                <p class="taller">{{ project.description}}</p>
                <a v-bind:href="project.source_url" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>
                <ul class="portfolio-details">
                    <li>
                        <p><strong>Skills:</strong></p>
                     
                            <li><i class="fa fa-check-circle"></i>HTML</li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="tall" />
        <div class="row">
            <div class="col-md-12">
                <h3>Related <strong>Work</strong></h3>
            </div>
             <ul class="portfolio-list">
                <li class="col-md-3 col-xs-6" v-for="relatedProject in relatedProjects">
                    <div class="portfolio-item thumbnail">
                        <a href='#' class="thumb-info">     
                         <img alt="" class="img-responsive" v-bind:src="'/user/img/projects/' + relatedProject.image.main">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">{{relatedProject.name}}</span>
                        <span class="thumb-info-type">{{relatedProject.type}}</span>
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
<section class="call-to-action featured footer">
    <div class="container">
        <div class="row">
            <div class="center">
                <h3>Hanusoft is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="#" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Join Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
            </div>
        </div>
    </div>
</section>     
    </div>
</template>

<script>
    export default {
        data(){
            return {
                project:[],
                nextProject: '#',
                prevProject: '#',
                relatedProjects: [],
            }

        },
        created(){
            this.fetchProject();
        },
        methods:{
            fetchProject(){
                this.$http.get('/api/guest/projects/' + this.$route.params.projectSlug).then(response => {
                    this.project = response.data.project;
                    this.nextProject = response.data.next;
                    this.prevProject = response.data.prev;
                    console.log(response.data.next);
                    console.log(response.data.prev);
                    this.relatedProjects = response.data.relatedProjects;
                });
            }
        }
    }
</script>
