<template>
  <div>
    <nav class="blue"></nav>

    <div class="container center" >
      <div class="row">
          <div class="col s12 m12 l12">
          <div class="card">
              <div class="card-content">
              <span class="card-title">Iniciar Sesion</span>
                  <form id="inicioSesion" autocomplete="off" @submit.prevent="login">
                      <input type="email" name="email" placeholder="Correo Electronico" required>
                      <input type="password" name="pass" placeholder="Password" required pattern="[A-Za-z0-9]{8,15}">
                      <input type="submit" value="Entrar" class="btn blue">
                  </form>
              </div>
              <div class="card-action">
                <router-link to="/registro">Registrarse</router-link>
              </div>
          </div>
          </div>
      </div>
    </div>

  </div>
</template>

<script>
  import axios from 'axios'
  import swal from 'sweetalert'

export default {
  name: 'iniciarSesion',
  methods:{
    login(){
        const form = document.getElementById('inicioSesion')
        axios.post('https://proywebpack.000webhostapp.com/snippetWebpack/api/loginRegistro/login.php', new FormData(form))
        .then(res => {
            this.respuesta = res.data
          if (res.data.res == 'success') {
            this.$localStorage.set('token',JSON.stringify(res.data.token));
            this.$router.push('inicio');
          }else {
            swal("Usuario y/o contraseña incorrecta!")
          }
        })
    }
  },
  created(){
    const token = JSON.parse(this.$localStorage.get('token'));
    if(token){
      this.$router.push('inicio');
    }
  }
}
</script>

