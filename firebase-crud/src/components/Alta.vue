<template>
    <div>
        <cabecera></cabecera>

        <div class="container mt-5">
            <h2>Alta post</h2>
            <form @submit.prevent="guardarPost">
                <div class="form-group">
                    <input type="text" placeholder="Nombre del post" class="form-control" v-model="nuevoPost.nombre">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subtitulo del post" class="form-control" v-model="nuevoPost.subtitulo">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Descripcion del post" class="form-control" v-model="nuevoPost.desc">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import firebase from 'firebase'
import cabecera from './cabecera'
import sesion from '../mixins/sesion'

var post = firebase.database().ref('posts')
export default {
    data(){
        return{
            nuevoPost:{
                nombre:'',
                desc:'',
                subtitulo:''
            }
        }
    },
    methods:{
        guardarPost(){
            post.push(this.nuevoPost) //Vue firebase
            this.nuevoPost.nombre = ''
            this.nuevoPost.desc= ''
            this.nuevoPost.subtitulo=''
        }
    },
    components:{
        cabecera
    },
    mixins:[sesion]

}
</script>