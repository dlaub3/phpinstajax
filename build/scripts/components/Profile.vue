<template>
  <div class="row">
    <div class="card col m4">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="http://materializecss.com/images/office.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        <p><a href="#">This is a link</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p class="biography">HERE is my {{biography}}</p>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'profile',
  data () {
    return {
      biography: 'This is a profile component',
      img: 'http://materializecss.com/images/office.jpg'
    }
  }
}
</script>
