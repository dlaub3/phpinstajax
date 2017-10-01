require("materialize-loader!./materialize.config.js");



var $ = require("jquery");
import Vue from 'vue';
import Hello from './components/App.vue';

new Vue({
  el: '#app',
  render: h => h(Hello)
})
