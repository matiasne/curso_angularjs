<template>
    <div>
        <h1>Autos Favoritos {{contadorLista}}</h1>
        <table class="table">
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Eliminar</th>
            <tr v-for="(item,index) in lista" :key="index">
                <td>{{item.marca}}</td>
                <td>{{item.modelo}}</td>
                <td>{{item.anio}}</td>
                <td><button class="btn btn-danger" @click="ELIMINAR_LISTA(index)">Eliminar</button></td>
            </tr>
        </table>
    </div>
</template>

<script>
import {mapState,mapGetters,mapMutations} from 'vuex'

export default {
    name: 'Lista',
    computed:{
        ...mapState(['lista']),
        ...mapGetters(['contadorLista'])
    },
    methods:{
        ...mapMutations(['ELIMINAR_LISTA'])
    }
}
</script>