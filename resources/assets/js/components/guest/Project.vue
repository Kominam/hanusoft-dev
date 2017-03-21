<template lang="html">
  <li class="isotope-item">
    <div class="portfolio-item img-thumbnail">
       <a href="#" class="thumb-info secundary">
       <div v-for='image in project'>
        <img alt="" class="img-responsive" v-bind:src="'/user/img/projects/' + image.main">
        </div>
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
