<script>
import CombatTrackerCard from '../components/game/CombatTrackerCard';

export default {
  name: 'GamePage',
  components: {CombatTrackerCard},
  props: {
    id: {
      type: String,
      required: true
    }
  },
  data () {
    return {
      campaign: {
        name: 'Campaign Name'
      }
    }
  },
  mounted () {
    this.$http.get(`/api/v1/game/${this.id}`).then(res => this.campaign = res.data)
  }
}
</script>

<template>
  <div class="game">
    <h3 class="title is-3 welcome-text">
      {{ campaign.name }}
    </h3>
    <div class="columns">
      <div class="column">
        <div class="box">
          <h4 class="title is-4">Combat Tracker</h4>
          <CombatTrackerCard />
          <CombatTrackerCard />
          <CombatTrackerCard />
        </div>
      </div>
      <div class="column">
        <div class="box">
          Hi
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
  .game {
    margin: 25px;

    .welcome-text {
      margin-bottom: 15px;
    }
  }
</style>
