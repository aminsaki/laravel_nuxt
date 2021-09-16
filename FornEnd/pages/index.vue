<template>
  <div class="row login">
    <div class="form-group col-md-12">
      <h4>login Users</h4>
    </div>
    <div class="form-group col-md-12">
      <label>username</label>
      <input type="text" class="form-control" v-model="user.email">
    </div>
    <div class="form-group col-md-12">
      <label>username</label>
      <input type="text" class="form-control" v-model="user.password">
    </div>
    <div class="form-group col-md-12">
      <button type="submit" v-on:click="login()" class="btn btn-danger form-control mybtnColor"> Login</button>
    </div>
  </div>
</template>

<script>

export default {
  name: "login",
  layout: 'default',
  data() {
    return {
      user: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    login() {
      this.$axios.post(`${$nuxt.$config.axios.baseURL}login`, {
        // 'email': this.user.email,
        // 'password': this.user.password,
        'email': "amin22@gmail.com",
        'password': "password"
      }).then(res => {
        this.$store.dispatch('saveToken',{
             token: `${res.data.token_type}  ${res.data.token.accessToken}`
        })
         this.$router.push({path: "admin/users"})
      }).catch(error => {
         console.log(error);
      })
    }
  }


}
</script>




