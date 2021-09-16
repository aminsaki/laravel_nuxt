<template>
  <div class="col-md-6 offset-3 editUser">
    <h6>فرم ویرایش کاربران</h6>
    <div class="form-group">
      <label>name</label>
      <input type="text" name="name" v-model="users.name" class="form-control">
    </div>
    <div class="form-group">
      <label>email</label>
      <input type="email" name="email" v-model="users.email" class="form-control">
    </div>
    <div class="form-group">
      <input type="submit" v-on:click="btnUpdate()" class="form-control btn btn-danger">
    </div>
  </div>
</template>

<script>
export default {
  name: "users",
  props: {
    users: {
      required: true,
    }
  },


  methods: {
    btnUpdate() {
      this.$store.dispatch({
        type: "updateUsers",
        id: this.users.id,
        name: this.users.name,
        email: this.users.email
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

