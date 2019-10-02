<template>
  <div class="container mt-5">
    <h1>Firestore</h1>
    <form @submit.prevent="guardar">
      <div class="form-group">
        <input type="text" placeholder="Nombre Pais" v-model="nombre" class="form-control">
      </div>
      <div class="form-group">
        <input type="text" placeholder="Estado" v-model="provincia" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" value="Guardar" class="btn btn-success">
      </div>
    </form>
    <table class="table">
        <thead>
          <th>Nombre</th>
          <th>Provincia</th>
          <th>Fecha</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody>
          <tr v-for="(item,id) in paises" :key="id">
            <td>{{item.nombre}}</td>
            <td>{{item.provincia}}</td>
            <td>{{item.fecha}}</td>
            <td><a href="#" @click="editar(item.id)" class="btn btn-info">Editar</a></td>
            <td><a href="#" @click="eliminar(item.id)" class="btn btn-danger">Eliminar</a></td>
          </tr>
        </tbody>
    </table>
  </div>
</template>

<script>
import {db} from './main'

export default {
  name: 'App',
  data(){
    return{
      paises:[],
      nombre:'',
      provincia:''
    }
  },
  firestore(){
    return{
      paises: db.collection('paises')
    }
  },
  methods:{
    guardar(){
      db.collection('paises').add({
        nombre:this.nombre,
        provincia: this.provincia,
        fecha: new Date()
      })
    },
    editar(id){
      db.collection('paises').doc(id).update({
        nombre:this.nombre,
        provincia: this.provincia,
        fecha: new Date()
      })
    },
    eliminar(id){
      db.collection('paises').doc(id).delete();
    }
  }
}
</script>

<style>

</style>
