<template>
  <div id="app">
    <img src="./assets/logo.png">
    <br>
    <router-link to="/">Inicio</router-link>
    
    <router-link to="/contacto/12/pedro/34">Contacto</router-link>
    
    <router-link to="/portafolio">Portafolio</router-link>

    <router-link to="/ajax">Ajax</router-link>

    <router-view/>
    
  </div>
</template>

<script>

export default {
  name: 'App'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
