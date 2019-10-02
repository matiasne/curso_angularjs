<template>
  <div>
    <h1>Dragabble</h1>
    <button class="btn btn-success" @click="ordenarOriginal">
      Ordenar
    </button>

    <div class="row mt-5">
      <div class="col-6">
        <draggable v-model="lista" ghost-class="linea" group="lenguajes" @end="ejecutarAccion">
          <transition-group type="transition" name="flip">
            <div class="ordenable" v-for="item in lista" :key="item.id">
              {{item.id}}  {{item.nombre}}
            </div>
          </transition-group>
        </draggable>
      </div>
      <div class="col-6">
        <draggable v-model="lista2" ghost-class="linea" group="lenguajes"  @start="ejecutarAccion">
          <transition-group type="transition" name="flip">
            <div class="ordenable" v-for="item in lista2" :key="item.id">
              {{item.id}}  {{item.nombre}}
            </div>
          </transition-group>
        </draggable>
      </div>
    </div>

    <h1>Reordenar filas</h1>
    <table class="table table-striped">
      <thead class="thead-dark">
        <th>id</th>
        <th>Nombre</th>
      </thead>
      <draggable v-model="lista" tag="tbody">
        <tr v-for="item in lista" :key="item.id">
          <td>{{item.id}}</td>
          <td>{{item.nombre}}</td>
        </tr>
      </draggable>
    </table>


    <h1>Reordenar columnas</h1>
    <table class="table table-striped">
      <thead class="thead-dark">
        <draggable v-model="cabeceras" tag="tr">
          <th v-for="cabecera in cabeceras" :key="cabecera">
            {{cabecera}}
          </th>
        </draggable>
      </thead>
      <tbody>
         <tr v-for="item in lista" :key="item.id">
          <td v-for="cabecera in cabeceras" :key="cabecera">
            {{item[cabecera]}}
          </td>
        </tr>
      </tbody>
    </table>


  </div>
</template>

<script>
import draggable from 'vuedraggable'
export default {
  name: 'HelloWorld',
  components:{
    draggable
  },
  data(){
    return{
      lista:[{
        nombre: "PHP",
        id:1
      },{
        nombre: "JAVA",
        id:2
      },{
        nombre: "C",
        id:3
      },{
        nombre: "C++",
        id:4
      },{
        nombre: "JavaScript",
        id:5
      },{
        nombre: "PYTHON",
        id:6
      }], lista2:[{
        nombre: "C#",
        id:7
      }],
      cabeceras:['id','nombre','apellido','direccion']
      
    }
  },
  methods:{
    ordenarOriginal(){
      this.lista = this.lista.sort((uno, dos)=>{
        return uno.id - dos.id;
      })
      this.lista2 = this.lista2.sort((uno, dos)=>{
        return uno.id - dos.id;
      })
    },
    ejecutarAccion(){
     // alert("moviste un item");
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.ordenable{
  width: 100%;
  background-color: whitesmoke;
  padding: 10px;
  margin-bottom: 2px;
  cursor: move;
}

.flip-move{
  transition: transform 0.5s
}
.linea{
  border-left: 10px solid red;

}
</style>
