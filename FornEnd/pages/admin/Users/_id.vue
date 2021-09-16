<template>
  <Edit :users="users" />
</template>

<script>
import Edit from "../../../components/Admin/Users/Edit";
export default {
  name:'id',
  layout: 'admin',
  data(){
    return{
      users:[]
    }
  },
  components: {
    Edit
  },
  mounted() {
    this.$store.dispatch({ type:"findUsers" , id:$nuxt.$route.params.id})
      .then(res => {
         // console.log(res.data.data;
       this.users =res.data.data;

    });
  },
}
</script>

<style scoped>

</style>
