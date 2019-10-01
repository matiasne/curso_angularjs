<template>
    <div>
        <cabecera></cabecera>

        <div class="container mt-5">
            <h2>Editar post</h2>
            <form @submit.prevent="editarPost">
                <div class="form-group">
                    <input type="text" placeholder="Nombre del post" class="form-control" v-model="editarItem.nombre">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subtitulo del post" class="form-control" v-model="editarItem.subtitulo">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Descripcion del post" class="form-control" v-model="editarItem.desc">
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
            editarItem:{},
            items:{}
        }
    },
    methods:{
        editarPost(){
            post.child(this.$route.params.id).update(this.editarItem)
            this.$router.push('/inicio')
        }
    },
    firebase:{
        item:post
    },
    created(){
       firebase.database().ref('posts/'+ this.$route.params.id).once('value',snapshot => {
           const item = snapshot.val()
           this.editarItem= {
                nombre: item.nombre,
                subtitulo: item.subtitulo,
                desc: item.desc
            }
       })
    },
    components:{
        cabecera
    },
    mixins:[sesion]

}
</script>