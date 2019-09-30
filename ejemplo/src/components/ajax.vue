<template>
    <div align="center">
        <h1>API JSONPLACEHOLDER </h1>
        <ul v-for="item in lista" :key="item.id">
            <li>{{item.name}}</li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios'
export default({
    name: 'ajax',
    data(){
        return {
            lista:[]
        }
    },
    created(){
        axios.get('https://jsonplaceholder.typicode.com/users').then(res => {
            this.lista = res.data
        })
    }
})
</script>