<template>
  <div class="hello">
    <h1>Hola</h1>
    <vue-good-table
    :columns="columns"
    :rows="rows"
    theme="black-rhino"
    :pagination-options="{
      enabled: true,
      mode: 'records',
      perPage: 5,
      position: 'top',
      perPageDropdown: [5, 10, 100],
      nextLabel: 'Siguiente',
      prevLabel: 'Anterior',
      rowsPerPageLabel: 'Filas por pagina',
      ofLabel: 'de'
    }"
    :search-options="{
      enabled: true,
      trigger: 'enter',
      placeholder: 'Buscar'
    }">

    </vue-good-table>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'HelloWorld',
  data(){
    return{
      columns:[
        {
          label:'Nombre',
          field:'nombre'
        },{
          label:'Porcentaje',
          field:'porcentaje'
        },{
          label:'Fecha',
          field:'fecha',
          type: 'date',
          dateInputFormat:'yyyy/mm/dd',
          dateOutputFormat: 'dd-mm-yyyy'
        },{
          label:'Cantidad',
          field:'dinero'
        },
      ],
      rows:[]
    }
  },
  methods:{
    ajax(){
      axios.get('./MOCK-DATA.json')
      .then(response =>{
        this.rows=response.data
      })
    }
  },
  created(){
    this.ajax()
  }
}
</script>
