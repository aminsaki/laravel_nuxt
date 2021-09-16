import Vuex from 'vuex'
import  users from './users';
import  auth from  './auth'

export default () => {
  return new Vuex.Store({
   modules: {
     users,
     auth
   },
    state: {
    },
    actions: {

    },
    mutations: {

    },
    getters: {},
  })

}
