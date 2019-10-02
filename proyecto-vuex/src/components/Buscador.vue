<template>
    <div class="row">
        <div class="col lg-4">
            <input type="text" class="form-control" placeholder="Marca" v-model="marca">
        </div>
        <div class="col lg-4">
            <input type="text" class="form-control" placeholder="Año" v-model="anio">
        </div>
        <div class="col lg-4">
            <button  @click="obtenerAutos" class="btn btn-primary btn-block">Buscar</button>
        </div>
    </div>
</template>

<script>
import {mapActions} from 'vuex'

export default {
    name: 'Buscador',
    computed:{
        marca:{
            get(){
                return this.$store.state.marca
            },
            set(valor){
                this.$store.commit('GET_MARCA',valor)
            }
        },
        anio:{
            get(){
                return this.$store.state.anio
            },
            set(valor){
                this.$store.commit('GET_ANIO',valor)
            }
        }
    },
    methods:{
        ...mapActions(['obtenerAutos'])
    }
}
</script>