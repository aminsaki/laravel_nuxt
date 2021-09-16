<template>
  <div class="row login">
    <div class="form-group col-md-12">
      <h4>login Users</h4>
    </div>
    <div class="form-group col-md-12">
      <label>username</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-12">
      <label>username</label>
      <input type="text" class="form-control">
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
        username: '',
        password: ''
      }
    }
  },
  methods: {
    login(){
      this.$axios.get('/sanctum/csrf-cookie', {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        },
        withCredentials: true,
      })
        .then( function(){
          this.$auth.loginWith('local', {
            data: {
              email: this.email,
              password: this.password
            },
          });
        }.bind(this))
    }
  }


}
</script>

