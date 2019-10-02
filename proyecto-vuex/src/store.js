import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(axios)
Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    //estados ej: arrays,objetos. El state se llama en computed
    titulo:'Proyecto Vuex',
    titulo2: 'Hola',
    autos:[],
    lista:[],
    marca:'',
    anio:''
  },
  mutations: {
    //Son como los methods. Sirven para modificar el state. Se corren en los methods de Vue
    LLENAR_AUTOS(state,datos){
      state.autos = datos
    },
    GET_MARCA(state,valor){
      state.marca = valor
    },
    GET_ANIO(state,valor){
      state.anio = valor
    },
    LLENAR_LISTA(state,auto){
      state.lista.push({
        marca : auto[0],
        modelo: auto[1],
        anio: auto[2]
      })
    },
    ELIMINAR_LISTA(state,index){
      state.lista.splice(index,1)
    }
  },
  actions: {
    // Se usan para llamar un backend, api ,db
    async obtenerAutos({commit,state}){
      const marca = state.marca
      const anio = state.anio
      const datos = await axios.get('http://localhost/curso_angularjs/vuex/api/getAutos.php?marca=' + marca + '&anio=' + anio)
      commit('LLENAR_AUTOS',datos.data)
    }
  },
  getters:{
    //Sirven para enviar informacion
    //filtro
    //numero de elementos de un array ,etc
    contadorLista(state){
      return state.lista.length
    }
  }
})
