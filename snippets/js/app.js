const app = new Vue({
    el:'#app',
    data:{
        menu:true,
        respuesta:'',
        listar:[],
        buscar:'',
        itemId:'',
        formEditar:{},
        userPost: ''
    },
    created(){
        this.getCategoria();

        this.getUser();
        this.getId();
    },
    computed:{
        datosFiltrados(){
            return this.listar.filter((filtro)=>{
                return filtro.titulo.toUpperCase().match(this.buscar.toUpperCase()) || 
                filtro.descripcion.toUpperCase().match(this.buscar.toUpperCase());
            })
        }
    },
    methods:{
        alta(){
            const form = document.getElementById('altaPost');
            axios.post('https://proyectovue.000webhostapp.com/api/crud/altaPost.php', new FormData(form))
            .then(res => {
                this.respuesta = res.data

                if(res.data == 'success'){
                    Swal.fire({
                        title:'Buen Trabajo',
                        text: 'Post Guardar',
                        icon:'success',
                        button: 'ok'
                    });
                    form.reset();
                }else{
                    Swal.fire('El post no pudo ser guardado');
                }
            })
        },
        getId(){
            let uri = window.location.href.split('?');
            if(uri.length == 2){
                let vars = uri[1].split('&');
                let getVars = {};
                let tmp = '';
                vars.forEach(function(v){
                    tmp = v.split('=');
                    if(tmp.length == 2){
                        getVars[tmp[0]] = tmp[1];
                    }

                });
                this.itemId = getVars;

                axios.get('https://proyectovue.000webhostapp.com/api/crud/getId.php?id=' + this.itemId.id)
                .then(res=>{
                    this.formEditar = res.data
                })
            }
        },
        editar(){
            const form = document.getElementById('editarPost');
            axios.post('../api/crud/editarPost.php', new FormData(form))
            .then(res => {
                this.respuesta = res.data

                if(res.data == 'success'){
                    location.href = 'index.php';
                }else{
                    Swal.fire('El post no pudo editar');
                }
            })
        },
        eliminar(id){
            Swal.fire({
                title: 'Seguro que deseas eliminar el post?',
                text: 'Al eliminarlo no podras reculerarlo',
                icon: 'warning',
                buttons:true,
                dangerMode: true,
            })
            .then((acceptar)=>{
                if(acceptar){
                    axios.get('https://proyectovue.000webhostapp.com/api/crud/eliminar.php?id=' + id)
                    .then(res=>{
                        if (res.data == 'success') {
                           Swal.fire("Post eliminado");
                           this.getCategoria();
                        }else{
                            Swal.fire("Post NO eliminado");
                        }

                    })
                }else{
                    return false
                }
            })
        },
        getUser(){
            axios.get('https://proyectovue.000webhostapp.com/api/crud/getUser.php')
                .then(res=>{
                    this.userPost = res.data
            })
        },
        getCategoria(){
            let uri = window.location.href.split('?');
            if(uri.length == 2){
                let vars = uri[1].split('&');
                let getVars = {};
                let tmp = '';
                vars.forEach(function(v){
                    tmp = v.split('=');
                    if(tmp.length == 2){
                        getVars[tmp[0]] = tmp[1];
                    }

                });
                this.itemId = getVars;

                axios.get('https://proyectovue.000webhostapp.com/api/crud/getCategoria.php?cat=' + this.itemId.cat)
                .then(res=>{
                    this.listar = res.data
                })
            }else{
                axios.get('https://proyectovue.000webhostapp.com/api/crud/getPost.php')
                .then(res => {
                    this.listar = res.data
                })
            }
        }
    }
})
