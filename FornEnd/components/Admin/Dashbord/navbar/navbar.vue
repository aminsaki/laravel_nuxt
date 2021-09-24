<template>
  <div class="navbar row ">
    <a href="#" class="btn btn-danger" @click="logout">logout</a>
  </div>
</template>


<script>
export default {
  name: "navbar",
  data() {
    return {

    }
  },
  methods: {
    logout({commit}) {
      this.$store.dispatch('logout');
    }

  }
}
</script>

