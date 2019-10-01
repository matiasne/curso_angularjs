<template>
    <div>
        <cabecera></cabecera>

       <div class="container center" >
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                    <span class="card-title">Editar Post</span>
                        <form id="editarPost" autocomplete="off" @submit.prevent="editar">
                        <input type="text" name="titulo"  placeholder="Titulo" required :value="formEditar.titulo">
                        <textarea name="codigo" class="materialize-textarea" placeholder="Escribe tu codigo" cols="30" rows="10" :value="formEditar.codigo"></textarea>
                        <textarea name="descripcion" class="materialize-textarea" placeholder="Escribe tu descipcion" cols="30" rows="10" :value="formEditar.descripcion"></textarea>
                        <select name="categoria"  class="browser-default" required>
                            <option :value="formEditar.categoria" v-text="formEditar.categoria"></option>
                            <option value="php">PHP</option>
                            <option value="css">CSS</option>
                            <option value="html5">HTML5</option>
                            <option value="mysql">MYSQL</option>
                            <option value="vue">VUE</option>

                        </select>
                        <input type="text" name="id" :value="$route.params.id">
                        <input type="submit" value="Editar" class="btn blue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
</template>
<script>
import cabecera from './cabecera'
import sesion from '../mixins/sesion'
import axios from 'axios'
import swal from 'sweetalert'

export default {
    name:'editar',
    data(){
        return{
            formEditar:{}
        }
    },
    created(){
        this.getId();
    },
    components:{
        cabecera
    },
    methods:{
         getId(){
            const id = this.$route.params.id;
            axios.get('http://localhost/curso_angularjs/snippetWebpack/api/crud/getId.php?id=' + id)
            .then(res=>{
                this.formEditar = res.data
            })
        },
        editar(){
            const form = document.getElementById('editarPost');
            axios.post('http://localhost/curso_angularjs/snippetWebpack/api/crud/editarPost.php', new FormData(form))
            .then(res => {
                this.respuesta = res.data

                if(res.data == 'success'){
                    this.$router.push('/inicio');
                }else{
                    swal('El post no pudo editar');
                }
            })
        }
    },
    mixins:[sesion]
}
</script>