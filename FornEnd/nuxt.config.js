export default {

  axios: {

  },
  auth: {
    strategies: {
      laravelSanctum: {
        provider: 'laravel/passprot',
        url: 'http://localhost:8000',
      },
    },
  },
  router: {
  },
  publicRuntimeConfig: {
    axios: {
      baseURL: 'http://localhost:8000/api/',
      credentials: true, // this says that in the request the httponly cookie should be sent

    }
  },

  privateRuntimeConfig: {
    axios: {
      baseURL: process.env.BASE_URL
    }
  },
  head: {
    title: 'FornEnd',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  css: [
    '@/assets/css/main.scss'
  ],

  plugins: [
  ],

  components: true,

  buildModules: [
    '@nuxt/typescript-build',
  ],

  modules: [
    'bootstrap-vue/nuxt',
    '@nuxtjs/axios',

  ],

  build: {
  }
}
