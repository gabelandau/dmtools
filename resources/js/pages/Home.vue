<script>
import { mapGetters } from 'vuex'
import GameList from '../components/GameList'

export default {
  name: 'HomePage',
  components: { GameList },
  data: function () {
    return {
      games: [{ name: '', campaign: '', rule_set: '', status: '' }]
    }
  },
  computed: {
    ...mapGetters(['user'])
  },
  mounted () {
    this.$http.get('/api/v1/games/mine').then(res => this.games = res.data)
  }
}
</script>

<template>
  <div class="home">
    <h3 class="title is-3 welcome-text">
      Welcome back, {{ user.name }}.
    </h3>
    <GameList :games="games" />
  </div>
</template>

<style lang="scss" scoped>
.home {
  margin: 25px auto;
  width: 80%;

  .welcome-text {
    margin-bottom: 15px;
  }
}
</style>
