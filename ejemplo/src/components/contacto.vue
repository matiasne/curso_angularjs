<template>
    <div align="center">
        <h1>Contacto {{id}} - {{nombre}} - {{edad}}</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, quia. Iste sit, vitae quibusdam ullam quae commodi odit at unde, repellendus beatae exercitationem corporis velit quos. Quisquam ad iure velit.
        </p>
    </div>
</template>

<script>
export default {
    name: 'Contactos',
    props:['id','nombre','edad']
}
</script>

<style  scoped>
h1{
    color : red;
}
p{
    text-align: center;
    font-size : 30px;
    font-weight : bolder;
}
</style>