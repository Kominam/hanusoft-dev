<template lang="html">
  <li class="isotope-item websites">
    <div class="portfolio-item img-thumbnail">
      <a href="single-project.html" class="thumb-info secundary">
        <img alt="" class="img-responsive" v-bind:src="project.image">
        <span class="thumb-info-title">
          <span class="thumb-info-inner">{{ project.name }}</span>
          <span class="thumb-info-type">{{ project.type }}</span>
        </span>
        <span class="thumb-info-action">
          <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
        </span>
      </a>
    </div>
  </li>
</template>
<script>
  export default {
    props: ['project']
  }
</script>
