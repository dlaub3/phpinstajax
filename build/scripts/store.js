import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

/* eslint-disable  no-param-reassign */
export default new Vuex.Store({
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
  actions: {
    apiRequest(context, formData) {
      $.post({
        url: 'app.php',
        data: `data=${formData}`,
        dataType: 'text',
        success(data) {
          data = JSON.parse(data);
          if (data.error) {
            context.commit('update', data);
          } else {
            data.error = null;
            context.commit('update', data);
          }
          if (data.tag) {
            context.commit('update', data.tag);
          } else if (data.user) {
            context.commit('update', data.user);
          }
        }
      });
    }
  }
});
