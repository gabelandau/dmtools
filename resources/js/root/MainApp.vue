<template>
  <div>
    <MainMenu />
    <router-view></router-view>
  </div>
</template>

<script>
import MainMenu from '../components/MainMenu'

export default {
  name: 'main-app',
  components: { MainMenu },
  props: [ 'user' ],
  beforeMount () {
    this.$store.commit('setUser', JSON.parse(this.user))
  }
}
</script>
