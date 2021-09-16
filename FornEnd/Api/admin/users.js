import axios from "axios";

async getUsers(state, payload , $config) {
  return new Promise((resolve, reject , ) => {
    const users = axios.get( `${$nuxt.$config.axios.baseURL}users`)
    resolve(users);
  });
},
async delUsers(state, payload) {
  const users = axios.delete(`${$nuxt.$config.axios.baseURL}users/${payload.id}`)
  return users;

},///
async findUsers(state, payload) {
  return new Promise((resolve, reject) => {
    const users = axios.get(`${$nuxt.$config.axios.baseURL}users/${payload.id}`)
    resolve(users);
  });
},
async updateUsers(state, payload) {
  return new Promise((resolve, reject) => {
    let data = {'name': payload.name, 'email': payload.email}
    const users = axios.put(`${$nuxt.$config.axios.baseURL}users/${payload.id}`, data)
    resolve(users);
  });
},
async createUsers(state, payload) {
  return new Promise((resolve, reject) => {
    let data = {'name': payload.name, 'email': payload.email}
    const users = axios.post(`${$nuxt.$config.axios.baseURL}users`, data)
    resolve(users);
  });
},
async SerachUsers(state, payload) {
  return new Promise((resolve, reject) => {
    let data = {'serach': payload.serach, }
    const users = axios.post(`${$nuxt.$config.axios.baseURL}users/serach`,data)
    resolve(users);
  });
}

