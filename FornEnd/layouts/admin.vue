<template>
  <div class="container-fluid">
     <navbar/>
    <div class="row">
        <Nuxt/>
        <Dashbord/>
    </div>
  </div>
</template>
<script>
import Dashbord from "../components/Admin/Dashbord/Dashbord";
import Navbar from "../components/Admin/Dashbord/navbar/navbar";

export default {
  'layout': 'admin',
   'middleware':'log',
  components: {
    Navbar,
    Dashbord
  },
}
</script>

