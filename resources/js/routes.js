import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home'
import Admin from './pages/Admin'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/web/',
      name: 'Home',
      component: Home
    },
    {
      path: '/web/admin',
      name: 'Admin',
      component: Admin
    }
  ]
})
