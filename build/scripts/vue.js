import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import App from './components/App.vue';

const store = new Vuex.Store({
  state: {
    responseData: {}
  },
  mutations: {
    update (state, payload) {
      state.responseData = payload;
    }
  },
  getters: {
    getResponseData: state => state.responseData
  }
});

new Vue({
  el: '#app',
  store,
  render: h => h(App)
});
