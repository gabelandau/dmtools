<template>
  <div class="home">
    <h3 class="title is-3 welcome-text">Welcome back, {{ user.name }}.</h3>
    <GameList v-bind:games="games" />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import GameList from '../components/GameList'

export default {
  name: 'home',
  components: { GameList },
  data: function () {
    return {
      games: {}
    }
  },
  mounted () {
    this.$http.get('/api/v1/games/mine').then(res => this.games = res.data)
  },
  computed: {
    ...mapGetters(['user'])
  }
}
</script>

<style lang="scss" scoped>
.home {
  margin: 25px auto;
  width: 80%;

  .welcome-text {
    margin-bottom: 15px;
  }
}
</style>
