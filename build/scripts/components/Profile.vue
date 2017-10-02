<template>
<div class="row">
  <div class="col s12 m4 l3">
    <div class="card blue lighten-1">
              <a class="btn-floating right activator btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <div class="section center-align">
        <div class="chip blue lighten-5">
          <img :src=getResponseData.profile_pic_url_hd alt="Contact Person"> {{getResponseData.username}}
        </div>
      </div>
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" :src=getResponseData.profile_pic_url_hd>
      </div>

      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4 "><i class="material-icons grey-text text-darken-4 right">close</i>{{getResponseData.full_name}}</span>
        <div class="section center-align">
          <div class="chip blue lighten-5">
            Posts: {{getResponseData.media.count}}
            <i class="close material-icons">close</i>
          </div>

          <div class="chip blue lighten-5">
            Followers: {{getResponseData.followed_by.count}}
            <i class="close material-icons">close</i>
          </div>

          <div class="chip blue lighten-5">
            Follows: {{getResponseData.follows.count}}
            <i class="close material-icons">close</i>
          </div>
        </div>
        <p class="biography">{{getResponseData.biography}}</p>
      </div>
    </div>
  </div>

    <div class="col s12 m4 l3" v-for="media in getResponseData.media.nodes">
      <media :media="media"></media>
    </div>


</div>
</template>

<script>
import Media from './Media.vue';
import {
  mapGetters
} from 'vuex';
export default {
  computed: {
    ...mapGetters([
      'getResponseData'
    ])
  },
  name: 'profile',
  components: {
    'media': Media
  },
}
</script>
