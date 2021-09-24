import axios from 'axios'

import {SET_TOKEN} from "~/type";
import {store} from "core-js/internals/reflect-metadata";

// state
export const state = () => ({
  token: null
})

export const mutations = {
  SET_TOKEN(state, token) {
    state.token = token
  },

  CLEAR_TOKEN(state){
    this.state.token = null,
    localStorage.removeItem('token'),
    this.$cookies.remove('token')
    this.$router.push({path: "/"});
  }
}
// getters
export const getters = {
  isAuthenticated(state) {

    return  (state.token) ?  state.token : "";
  }


}
// actions
export const actions = {
  saveToken({commit, dispatch}, {token}) {
    localStorage.setItem('token', token);
    this.$cookies.set('token', token);
    commit('SET_TOKEN', token)
  },
  async initAuth({context, store, commit, res}, req) {
    let token;
    if (req && req.headers.cookie) {
      const cookie = req.headers.cookie.split(';').find((c) => c.trim().startsWith('token='))
      if (!cookie) {
        return;
      }
      token = cookie.split('=');
    } else {
      if (typeof localStorage === 'undefined') {
        return;
      }
      token = localStorage.getItem('token');
      if (!token) {
        return;
      }

    }
    commit('SET_TOKEN', token)
  },

  async logout({commit ,redirect}) {
    commit('CLEAR_TOKEN');

  }
}


export default {
  mutations,
  actions,
  getters

}
