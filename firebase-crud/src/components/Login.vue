<template>
    <div>
        <div class="container mt-5">
            <h2>Login</h2>
            <form @submit.prevent="login">
                <input type="email" placeholder="Email" v-model="email" >
                <input type="password" placeholder="Contraseña" v-model="contraseña">
                <input type="submit" class="btn btn-info" value="Entrar">
            </form>
            <a href="#" @click="registro">Registrarse</a>
        </div>
    </div>
</template>

<script>
import firebase from 'firebase'
import { error } from 'util';

var firebaseConfig = {
    apiKey: "AIzaSyB7TGwi6KJwMyr0Gng1OKEn1hdvVrITFnI",
    authDomain: "fir-crud-7d0d5.firebaseapp.com",
    databaseURL: "https://fir-crud-7d0d5.firebaseio.com",
    projectId: "fir-crud-7d0d5",
    storageBucket: "",
    messagingSenderId: "814118186517",
    appId: "1:814118186517:web:a568ebc7c10f907ad4681c",
    measurementId: "G-J3GRNVFH75"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  //firebase.analytics();

export default {
    data(){
        return{
            email:'',
            contraseña:''
        }
    },
    methods:{
        login(){
            firebase.auth().signInWithEmailAndPassword(this.email,this.contraseña)
            .then((user) => this.$router.push('inicio'), (error)=> alert("Error al logearse"))
        },
        registro(){
             firebase.auth().createUserWithEmailAndPassword(this.email,this.contraseña)
            .then((user) => this.$router.push('inicio'), (error)=> alert("Error al registrarse"))
        }
    },
    created(){
        firebase.auth().onAuthStateChanged((user)=>{
            if (user == true) {
                this.$router.push('/inicio');
            }
        })
    }
    
}
</script>