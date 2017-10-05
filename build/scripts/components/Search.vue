<template>
<div class="row">
    <div class="col s12 m4 l3" v-for="media in getResponseData.media.nodes">
      <tag :media="media"></tag>
    </div>
</div>
</template>

<script>
import Tag from './Tag.vue';
import {
  mapGetters
} from 'vuex';
export default {
  computed: {
    ...mapGetters([
      'getResponseData'
    ])
  },
  name: 'search',
  components: {
    'tag': Tag
  },
}
</script>
