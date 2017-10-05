<template>
<div>
  <div class="card profil blue lighten-1">
    <a class="btn-floating activator right blue darken-2"><i class="material-icons">add</i></a>
    <div class="section center-align">
      <div class="chip blue lighten-5">
        Likes: {{media.likes.count}}
        <i class="close material-icons">close</i>
      </div>

      <div class="chip blue lighten-5">
        Comments: {{media.comments.count}}
        <i class="close material-icons">close</i>
      </div>
    </div>
    <div class="card-image">
      <img class="activator" :src=media.thumbnail_src>
    </div>
    <div class="card-reveal">
      <span class="card-title white-text"><i class="material-icons grey-text text-darken-4 right">close</i></span>
      <p>{{media.caption}}</p>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'media',
  props: {
    media: ""
  }
}
</script>
