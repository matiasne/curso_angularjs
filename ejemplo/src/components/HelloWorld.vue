<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <boton></boton>
  </div>
</template>

<script>

import boton from './boton'

export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Bievenido a tu App Vue.js'
    }
  },
  components:{
    boton
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
