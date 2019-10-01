<template>
    <div>
        <cabecera></cabecera>
        <div class="container">
            <div class="card mt-3" v-for="item in items" :key="item['.key']">
                <div class="card-body">
                    <h3 class="card-title">{{item.nombre}}</h3>
                    <h6 class="card-subtitle mn-2 text-muted">{{item.subtitulo}}</h6>
                    <p class="card-text">{{item.desc}}</p>
                    <router-link :to="'/editar/'+item['.key']" class="card-link">Editar</router-link>
                    <a href="#" class="card-link" @click="eliminar(item)">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import cabecera from './cabecera'
import sesion from '../mixins/sesion'
import firebase from 'firebase'

var post = firebase.database().ref('posts')
export default {
    components:{
        cabecera
    },
    data(){
        return{
            items:[]
        }
        
    },
    firebase:{
        items:post
    },
    methods:{
        eliminar(item){
            var x = confirm("Eliminar registro")
            if (x == true) {
                post.child(item['.key']).remove();
            }
           
        }
    },
    mixins:[sesion]
}
</script>