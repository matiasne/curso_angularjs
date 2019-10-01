<template>
    <div>
        <div class="container center" >
        <div class="row">
            <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                <span class="card-title">Registro</span>
                    <form id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
                        <input type="text" name="usuario" placeholder="Nombre del usuario" required pattern="[A-Za-z]{5,30}">    
                        <input type="password" v-model="pass" name="pass" placeholder="Password" required pattern="[A-Za-z0-9]{8,15}">
                        <input type="password" v-model="passC" name="pass" placeholder="Confirmar el Password" required pattern="[A-Za-z0-9]{8,15}">
                        <input type="email" v-model="correo" name="email" placeholder="Correo Electronico" @blur="validarCorreo" required>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen de Perfil</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <input type="submit" value="Registrarse" :class="boton" >
                
                    </form>
                </div>
                <div class="card-action">
                    <router-link to="/">Iniciar Sesion</router-link>
                </div>
            </div>
            </div>
        </div>
</div>
    </div>
</template>
<script>
import swal from 'sweetalert'
import axios from 'axios'

export default {
    name:'registro',
    data(){
        return {
            pass:'',
            passC: '',
            respuesta:'',
            correo: '',
            boton: 'btn blue disabled',
        }
    },
    methods:{
        registro(){
            if(this.pass == this.passC){
                const form = document.getElementById('formRegistro')
                axios.post('http://localhost/curso_angularjs/snippetWebpack/api/loginRegistro/registro.php', new FormData(form))
                .then(res => {
                    this.respuesta = res.data
                    this.direccionamiento()
                })
            }else{
                swal('Los password no son iguales');
            }
        },
        direccionamiento(){
            if(this.respuesta == 'success'){
               this.$router.push('/');
            }else{
                swal('No se pudo registrar');
            }
        },
        validarCorreo(){
            if(this.validEmail(this.correo)){
                const formData = new FormData()
                formData.append('correo',this.correo);
                axios.post('http://localhost/curso_angularjs/snippetWebpack/api/loginRegistro/validarEmail.php', formData)
                .then(res => {
                    this.respuesta = res.data
                    if(res.data == 'success'){
                        this.boton = ' btn blue';
                    }else{
                        swal('El Correo Electronico ya Existe');
                    }
                })
            }else{
                swal('Escribe el correo de forma Correcta');
            }
            
        },
        validEmail: function (email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    }
}
</script>