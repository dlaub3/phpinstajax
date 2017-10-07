/* @flw */


import Vue from 'vue';
import Vuex from 'vuex';
import App from './components/App.vue';

Vue.use(Vuex);


/* eslint-disable  no-param-reassign */
const store = new Vuex.Store({
  state: {
    responseData: {},
  },
  mutations: {
    update(state: Object, payload: Object) {
      state.responseData = payload;
    },
  },
  getters: {
    getResponseData: (state: Object): Object => state.responseData,
  },
});

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  render: (h: Object): Object => h(App),
});
