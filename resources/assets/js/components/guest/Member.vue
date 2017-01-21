<template lang="html">
    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item" v-bind:class="member.grade ">
                                <div class="team-item thumbnail">
                                <router-link :to="{ name: 'member.show', params: { memberSlug: member.slug }}" class="thumb-info team">
                                        <img class="img-responsive" alt="" v-bind:src="member.avatar_image">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{ member.name }}</span>
                                            <span class="thumb-info-type">{{member.major }}</span>
                                        </span>
                                    </router-link>
                                    <span class="thumb-info-caption">
                                        <p>{{ member.bio | str_limit(50) }}</p>
                                        <span class="thumb-info-social-icons">
                                            <a data-tooltip data-placement="bottom" target="_blank" v-bind:href="member.facebook" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <a data-tooltip data-placement="bottom" v-bind:href="member.gmail" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <a data-tooltip data-placement="bottom" v-bind:href="member.github"data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                        </span>
                                    </span>
                                </div>
    </li>               
</template>

<script>
    export default {
        props: ['member']
    }

</script>
