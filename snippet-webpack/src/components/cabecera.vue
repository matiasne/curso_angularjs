<template>
    <div>
        <nav class="blue">
            <div class="nav-wrapper"> 
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><router-link to="/inicio"><i class="material-icons">home</i></router-link></li>
                    <li><router-link to="/alta"><i class="material-icons">add</i></router-link></li>
                    <li><router-link to="/categorias/php">PHP</router-link></li>
                    <li><router-link to="/categorias/css">CSS</router-link></li>
                    <li><router-link to="/categorias/html5">HTML5</router-link></li>
                    <li><router-link to="/categorias/vue">VUE</router-link></li>
                    <li><router-link to="/categorias/mysql">MYSQL</router-link></li>
                    <li><a href="#" @click="salir">Salir</a></li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'cabecera',
    methods:{
        salir(){
            const token = JSON.parse(this.$localStorage.get('token'))
            axios.get('http://localhost/curso_angularjs/snippetWebpack/api/loginRegistro/salir.php?token=' + token)
            .then(res => {
                if(res.data == 'success'){
                    this.$localStorage.remove('token');
                    this.$router.push('/');
                }
            })
        }
    }
}
</script>