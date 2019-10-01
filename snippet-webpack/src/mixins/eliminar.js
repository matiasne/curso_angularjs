import axios from 'axios'
import swal from 'sweetalert'

export default{
    
    methods:{
        eliminar(id){
            swal({
                title: 'Seguro que deseas eliminar el post?',
                text: 'Al eliminarlo no podras reculerarlo',
                icon: 'warning',
                buttons:true,
                dangerMode: true,
            })
            .then((acceptar)=>{
                if(acceptar){
                    axios.get('https://proywebpack.000webhostapp.com/snippetWebpack/api/crud/eliminar.php?id=' + id)
                    .then(res=>{
                        if (res.data == 'success') {
                           swal("Post eliminado");
                           this.getCategoria();
                        }else{
                            swal("Post NO eliminado");
                        }
    
                    })
                }else{
                    return false
                }
            })
        },
    }
}