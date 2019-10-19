import './bootstrap'
import 'bulma'
import 'bulmaswatch/darkly/bulmaswatch.min.css'
import '../sass/app.scss'

import Vue from 'vue'

import Routes from './routes'
import Store from './store'

// Register Vue components
import MainApp from './root/MainApp'

Vue.prototype.$http = window.axios;

new Vue({
  el: '#app',
  router: Routes,
  store: Store,
  components: { MainApp, }
})

