<template>
  <div class="header">
    <h1> {{h1}} </h1>
    <form id="get" action="app.php" method="post" v-on:click.stop.prevent="getUserInfo">
        <input type="text" name="username" value="popularmechanics"><br />
        <input type="submit" name="submit" value="Search"><br />
    </form>
    <div id="data"></div>
    
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      h1: "Insta Search"
    }
  },
  methods: {
    getUserInfo() {
      let data = $(this).serialize();
      let getUserInfo = $.post({
        url: "app.php",
        data: data,
        dataType: "text",
        success: function(data) {
          data = JSON.parse(data);
          $("#data").html(data.user.biography);
        }
      });
      return false;
    }
  }
}
</script>

<style{{#sass}} lang="scss"{{/sass}}>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
