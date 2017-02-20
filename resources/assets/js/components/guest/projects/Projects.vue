<template lang="html">
  <div role="main" class="main">
    <section class="page-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Projects</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>All Projects</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="sort-source-wrapper">
      <div class="container">
        <ul class="nav nav-pills sort-source secundary pull-right" data-sort-id="portfolio" data-option-key="filter">
          <li data-option-value="*" class="active"><a href="#">Show All</a></li>
        </ul>
      </div>
    </div>
    <ul class="portfolio-list sort-destination full-width" data-sort-id="portfolio">
      <Project v-for="project in projects" v-bind:project="project"></Project>
    </ul>
  </div>
</template>
<script>
  import Project from './Project.vue';
  export default {
    data() {
      return {
        projects: []
      }
    },
    components: { Project },
    created() {
      this.fetchProjects();
    },
    methods: {
      fetchProjects() {
        this.$http.get('/api/guest/projects').then(response => {
          this.projects = response.data.projects;
        });
      }
    }
  }
</script>
