<template>
    <div>
        <h1>{{titulo}} {{titulo2}}</h1>
    </div>
</template>

<script>
import {mapState} from 'vuex'
export default {
    name:'Titulo',
    computed:{
        ...mapState(['titulo','titulo2']) //Mapea todo el state del store Vuex
    }
}
</script>