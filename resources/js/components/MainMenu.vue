<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <router-link tag="a" to="/web/" class="navbar-item">
        <h4 class="title is-4">Dungeon Master Tools</h4>
      </router-link>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-menu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="main-menu" class="navbar-menu">
      <div class="navbar-start">
        <router-link active-class="is-active" tag="a" to="/web/" class="navbar-item" exact>Home</router-link>
        <router-link active-class="is-active" tag="a" to="/web/admin" class="navbar-item">Administration</router-link>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-light" href="/web/logout">Log out</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'main-menu',
}
</script>

<style lang="scss" scoped>
.navbar {
  border-radius: 0;
  -moz-border-radius: 0;
}
</style>
