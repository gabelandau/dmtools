<template>
  <div class="admin">
    <h3 class="title is-3 welcome-text">Administration</h3>
    <div class="columns">
      <div class="column is-narrow">
        <div class="box side-menu">
          <aside class="menu">
            <p class="menu-label">
              User Management
            </p>
            <ul class="menu-list">
              <li><a class="is-active">Users</a></li>
              <li><a>Roles</a></li>
            </ul>
            <p class="menu-label">
              Game Management
            </p>
            <ul class="menu-list">
              <li>
                <a>Games</a>
              </li>
            </ul>
            <p class="menu-label">
              Settings
            </p>
            <ul class="menu-list">
              <li><a>Game Rules</a></li>
              <li><a>Feature Switches</a></li>
            </ul>
          </aside>
        </div>
      </div>

      <div class="column">
        <div class="box">
          <h4 class="title is-4">User Management</h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'admin'
}
</script>

<style lang="scss" scoped>
.admin {
  margin: 25px auto;
  width: 80%;

  .welcome-text {
    margin-bottom: 15px;
  }

  .side-menu {
    width: 250px;
  }
}
</style>
