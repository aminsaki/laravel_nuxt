<template>
  <div>
    <div class="col-md-6 offset-3 editUser">
      <h6 class="btn-info" style="padding: 10px 10px; border-radius: 4px 5px ">اضافه کردن کابران</h6>
      <div class="form-group">
        <label>name</label>
        <input type="text" name="name" v-model="name" class="form-control">
      </div>
      <div class="form-group">
        <label>email</label>
        <input type="email" name="email" v-model="email" class="form-control">
      </div>
      <div class="form-group">
        <label>password</label>
        <input type="password" name="email" v-model="password" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" v-on:click="btnCreate()" class="form-control btn btn-danger">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AddUser",
  layout: "admin",

  methods: {
    btnCreate: function () {
      this.$store.dispatch({
         type: "createUsers",
         name: this.name,
         email: this.email,
         password: this.password
        }).then(res => {
        if (res.status == 200) {
          alert(res.data.dsc);
          return $nuxt.$router.push({'path': '/admin/users'})
        }

      });
    }
  }

}
</script>


<style scoped>

</style>
