import axios from 'axios'


const state = {
    token: null
  }

 const mutations = {
    SET_TOKEN(state, token) {
      state.token = token
    }
  }
// getters
export const getters = {
  token: state => state.token,

}
 const actions = {
   saveToken ({ commit, dispatch }, { token }) {
     commit('SET_TOKEN', token)
      localStorage.setItem('token' , token);
   },
 }


export default {
  state,
  mutations,
  actions
}
