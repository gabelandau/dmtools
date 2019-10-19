<template>
  <div class="box">
    <h4 class="title is-4">Your Games</h4>
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
        <tr v-for="game in games" v-bind:key="game.id">
          <td>{{ game.name }}</td>
          <td>{{ game.campaign }}</td>
          <td>{{ game.rule_set }}</td>
          <td><span class="tag" v-bind:class="{
                'is-primary': game.status === 'Active',
                'is-success': game.status === 'Complete'
              }">
            {{ game.status }}
          </span></td>
          <td v-if="game.status === 'Active'">
            <button class="button is-primary is-small">Launch as DM</button> <button class="button is-primary is-small">Launch for Screen</button>
          </td>
          <td v-else>
            <button class="button is-danger is-small">Delete From List</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: 'game-list',
  props: ['games']
}
</script>
