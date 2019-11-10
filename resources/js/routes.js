import Vue from 'vue'
import Router from 'vue-router'
import HomePage from './pages/Home'
import GamePage from './pages/Game'
import AdminPage from './pages/Admin'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/web/',
      name: 'Home',
      component: HomePage
    },
    {
      path: '/web/admin',
      name: 'Admin',
      component: AdminPage
    },
    {
      path: '/web/game/:id',
      name: 'Game',
      component: GamePage,
      props: true
    }
  ]
})
