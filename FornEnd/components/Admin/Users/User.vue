<template>
  <div class="user col-md-10">
    <div class="form-group">
      <nuxt-link to="/admin/users/Create" class="btn btn-info">Add</nuxt-link>
    </div>
    <div class="row">
      <input type="search" name="serach" v-model="serach" v-on:keyup="getSerach()" class="form-control">
    </div>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>actions</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="(user , index) in users">
        <td>{{ user.id }}</td>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>
          <a href="#" v-on:click="DeleteId(user.id , index)" class="btn btn-danger">Delete</a>
          <nuxt-link :to='`/admin/users/${user.id}`' class="btn btn-success">Edit</nuxt-link>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>

export default {
  name: "User",
  props: {
    users: {
      required: true
    }
  },

  data() {
    return {
      result: [],
      serach: ''
    }
  },

  methods: {
    ResultUsers() {
      this.usersthis.users;
    },
    DeleteId(id, index) {
      this.$store.dispatch({type: "delUsers", id: id}).then(res => {
        alert(res.data.dsc);
        this.users.splice(index, 1);
      });
    },
    getSerach() {
      let serach = (this.serach) ? this.serach : "";
      this.$store.dispatch({type: "SerachUsers", serach: serach}).then(res => {
        this.users = res.data.data;
      });
    }
  }

}
</script>

