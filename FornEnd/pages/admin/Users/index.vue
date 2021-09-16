<template>
  <User :users="users"/>
</template>
<script>

import User from '@/components/Admin/Users/User'
import Dashbord from "../../../components/Admin/Dashbord/Dashbord";
export default {
  name: "index",
  layout: 'admin',
  data() {
    return {
      users: []
    }
  },


  components: {
    User, Dashbord
},
  mounted() {
    self = this;
      self.$store.dispatch('getUsers').then(res => {
        self.users = res.data.data;
      });
    }

}
</script>


