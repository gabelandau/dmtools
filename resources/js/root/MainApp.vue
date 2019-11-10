<script>
import MainMenu from '../components/MainMenu'

export default {
  name: 'MainApp',
  components: { MainMenu },
  props: {
    user: {
      type: String,
      default: '{}'
    }
  },
  beforeMount () {
      this.$store.commit('setUser', JSON.parse(this.user))
  }
}
</script>

<template>
  <div>
    <MainMenu />
    <router-view></router-view>
  </div>
</template>
