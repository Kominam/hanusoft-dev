<template lang="html">
  <div role="main" class="main">
                <section class="page-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Pages</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Team</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <h2>Meet the <strong>Team</strong></h2>
                    <ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
                        <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                        <li v-for="grade in grades" data-option-value=".K13"><a href="#">{{ grade.grade }}</a></li>
                    </ul>
                    <hr />
                    <div class="row">
                        <ul class="team-list sort-destination" data-sort-id="team">
                           <Member v-for="member in members" v-bind:member="member"></Member>
                        </ul>
                    </div>
                </div>
  </div>
</template>

<script>
    import Member from './Member.vue';
    export default {
        data(){
            return {
                members:[],
                grades:[],
            }

        },
        components: { Member },
        created(){
            this.fetchMembers();
            this.fetchGrades();
        },
        methods:{
            fetchMembers(){
                this.$http.get('/members').then(response => {
                    this.members = response.data.members;
                });
            },
            fetchGrades(){
                this.$http.get('/grades').then(response => {
                    this.grades = response.data.grades;
                });
            }
        }
    }
</script>
