<template>
    <button class="btn btn-primary" @click="clic">{{mensaje}}</button>

</template>

<script>
    export default{
        name: 'miBoton',
        data(){
            return{
                mensaje: 'Da Click aqui'
            }
        },
        methods:{
            clic(){
                alert("Mi primer componente con webpack y vue");
            }
        }
    }
</script>