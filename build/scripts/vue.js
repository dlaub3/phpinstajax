/* @flow */

import Vue from 'vue';
import Vuex from 'vuex';
import App from './components/App.vue';
import store from './store';

Vue.use(Vuex);

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  render: (h): Object => h(App),
});
