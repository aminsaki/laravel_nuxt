// import axios from "axios";
import {getters} from "~/store/auth";
//
// export default  ({ store, redirect , req }) => {

//
//     // If the user is not authenticated
//     // if (!store.getters.state.a) {
//            console.log("True" , store.getters.isAuthenticated);
//          // return ;
//      // }
//     // console.log("fa" , store.state.authenticated);
//
// }


export default ({ store, redirect , req }) => {
   store.dispatch('initAuth', req, redirect);
  if(!store.getters.isAuthenticated) {
       return redirect('/');
   }

}
