<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand">Firebase Crud</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/inicio" class="nav-link">Inicio</router-link>
                </li>
                 <li class="nav-item">
                    <router-link to="/alta" class="nav-link">Alta Post</router-link>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link" @click="salir"> Salir</a>
                </li>
            </ul>
        </nav>
    </div>
</template>


<script>

import firebase from 'firebase'
export default {
    methods:{
        salir(){
            firebase.auth().signOut().then(()=> this.$router.push('login'));
        }
    }
}
</script>