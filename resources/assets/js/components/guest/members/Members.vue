<template>
	<ul class="team-list sort-destination" data-sort-id="team">
	 	<Member v-for="member in members" :member="member"></Member>
	</ul>
</template>

<script>
	import Member from './Member.vue';
	export default{
		data(){
			return {
				members:[]
			}
		},
		components: {Member},
		created(){
			this.fetchMembers();
		},
		methods: {
			fetchMembers(){
				axios.get('/api/guest/members').then(response => this.members = response.data.data);
			}
		}
	}
</script>
