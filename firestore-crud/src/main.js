// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import {firestorePlugin} from 'vuefire'
import firebase from 'firebase/app'
import 'firebase/firestore'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(firestorePlugin)
Vue.config.productionTip = false

var firebaseConfig = {
  apiKey: "AIzaSyCAfBR_Vct3I6pTpknKonYVCMR1sCvo2-g",
  authDomain: "firestorecrud-c7ebf.firebaseapp.com",
  databaseURL: "https://firestorecrud-c7ebf.firebaseio.com",
  projectId: "firestorecrud-c7ebf",
  storageBucket: "firestorecrud-c7ebf.appspot.com",
  messagingSenderId: "429749519505",
  appId: "1:429749519505:web:4e0b37fb44315d1c4c2b30",
  measurementId: "G-X2THBSZNPT"
};
// Initialize Firebase
let fire = firebase.initializeApp(firebaseConfig);

const database= fire.firestore();

export const db = database

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { App },
  template: '<App/>'
})
