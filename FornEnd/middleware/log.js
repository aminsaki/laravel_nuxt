import axios from "axios";

export default async ({store, redirect}) => {
  if (typeof localStorage === 'undefined') {
    return redirect('/');
  }

  const token = localStorage.getItem('token');

  if (token != null && token !== 'undefined') {
    axios.defaults.headers.common.AUTHORIZATION = localStorage.getItem('token');
    return;
  }

    delete axios.defaults.headers.common.Authorization;
    return redirect('/');


}



