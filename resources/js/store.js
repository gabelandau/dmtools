import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
  user: null
}

const mutations = {
  setUser(state, user) {
    state.user = user
  }
}

const getters = {
  user: state => state.user
}

export default new Vuex.Store({
  state,
  getters,
  mutations
})
