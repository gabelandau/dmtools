<script>
import { GameList } from '../helpers/prop-validation';

export default {
  name: 'GameList',
  props: {
    games: {
      type: Array,
      default: GameList.games.default,
      validator: GameList.games.validator
    }
  },
  methods: {
    navigateToGame: function (id) {
      this.$router.push(`/web/game/${id}`)
    }
  }
}
</script>

<template>
  <div class="box">
    <h4 class="title is-4">
      Your Games
    </h4>
    <table class="table is-fullwidth">
      <thead>
        <tr>
          <th>Name</th>
          <th>Campaign</th>
          <th>Rule Set</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="game in games" :key="game.id" @click="navigateToGame(game.id)">
          <td>{{ game.name }}</td>
          <td>{{ game.campaign }}</td>
          <td>{{ game.rule_set }}</td>
          <td>
            <span
              class="tag"
              :class="{
                'is-primary': game.status === 'Active',
                'is-success': game.status === 'Complete'
              }"
            >
              {{ game.status }}
            </span>
          </td>
          <td v-if="game.status === 'Active'">
            <button class="button is-primary is-small">
              Launch as DM
            </button> <button class="button is-primary is-small">
              Launch for Screen
            </button>
          </td>
          <td v-else>
            <button class="button is-danger is-small">
              Delete From List
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
