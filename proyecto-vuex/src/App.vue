<template>
  <div id="app" class="container">
    <Buscador/>
    <Titulo/>
    <Autos/>
    <Lista/>
  </div>
</template>

<script>
import Titulo from './components/Titulo'
import Autos from './components/Autos'
import Buscador from './components/Buscador'
import Lista from './components/Lista'

export default {
  name: 'app',
  components: {
    Titulo,
    Autos,
    Buscador,
    Lista
  }
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
