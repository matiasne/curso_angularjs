<template>
    <div>
        <table class="table">
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Agregar</th>
            <tr v-for="(item,index) in autos" :key="index">
                <td>{{item.marca}}</td>
                <td>{{item.modelo}}</td>
                <td>{{item.anio_modelo}}</td>
                <td><button class="btn btn-success" @click="LLENAR_LISTA([item.marca,item.modelo,item.anio_modelo])">Agregar</button></td>
            </tr>
        </table>
    </div>
</template>

<script>
import {mapState,mapMutations} from 'vuex'

export default {
    name: 'Autos',
    computed:{
        ...mapState(['autos'])
    },
    created(){
        //this.$store.dispatch('obtenerAutos')
    },
    methods:{
        ...mapMutations(['LLENAR_LISTA'])
    }
}
</script>