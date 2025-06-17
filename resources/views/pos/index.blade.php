@component('components.master')
@slot('content')
@verbatim
<div class="app-content content" id="app">
    <div class="sidebar-left">
        <div class="sidebar">
            <div class="todo-sidebar d-flex">
                <span class="sidebar-close-icon">
                    <i class="ft-x"></i>
                </span>
                <!-- todo app menu -->
                <div class="todo-app-menu">
                   
                    <!-- sidebar list start -->
                    <div class="sidebar-menu-list">
                       
                        <label class="filter-label mt-2 mb-1 pt-25">Configuración</label>
                        <div class="list-group">
                            <a :href="url('tareas')" class="list-group-item border-0">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Tareas</span>
                            </a>
                            <a :href="url('marcas')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Marcas</span>
                            </a>
                            <a :href="url('categorias')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Categorias</span>
                            </a>
                            <a :href="url('medidas')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Medidas</span>
                            </a>
                            <a :href="url('productos')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Productos</span>
                            </a>
                               <a :href="url('documentos')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Documentos</span>
                            </a>
                             <a :href="url('clientes')" class="list-group-item border-0 ">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Clientes</span>
                            </a>
                        </div>
                       
                        <label class="filter-label mt-2 mb-1 pt-25">POS</label>
                        <div class="list-group">
                            <a :href="url('pos')" class="list-group-item border-0 active">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>POS</span>
                            </a>
                            
                        </div>

                    </div>
                    <!-- sidebar list end -->
                </div>
            </div>
            <!-- todo new task sidebar -->
            <div class="todo-new-task-sidebar " :class="{'show':showSidebar}">
                <div class="card shadow-none p-0 m-0">
                    <div class="card-header border-bottom py-75">
                        <div class="task-header d-flex justify-content-between align-items-center">
                            <h5 class="new-task-title mb-0">Nuevo Cliente</h5>
                            
                            
                        </div>
                        <button type="button" class="close close-icon" @click="showSidebar = false">
                            <i class="ft-x"></i>
                        </button>
                    </div>
                    <!-- form start -->
                    <div id="compose-form" class="mt-1">
                        <div class="card-content">
                            <div class="card-body py-0 border-bottom">
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Nombre" id="" v-model="model.name">
                                   
                                </div>
                               
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Apellido" id="" v-model="model.apellido">
                                   
                                </div>
                               
                               
                                <div class="form-group">
                                  <select name="" class="form-control" v-model="model.documento_id">
                                    <option value="0" selected> Seleccionar Documento</option>
                                    <template v-for="documento in documentos">
                                        <option :value="documento.id">{{documento.name}}</option>
                                    </template>
                                  </select>
                                   
                                </div>
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="N° documento" id="" v-model="model.n_documento">
                                   
                                </div>
                        
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Correo" id="" v-model="model.correo">
                                   
                                </div>
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Telefono" id="" v-model="model.telefono">
                                   
                                </div>
                               
                            </div>
                
                            <div class="card-body pb-1">
                                
                                <div class="mt-1 d-flex justify-content-end">
                                    <button type="button" class="btn btn-dark add-todo" @click="showSidebar = false">Cerrar</button>
                                    <button type="button" class="btn btn-danger update-todo" v-if="actualizar==false" @click="GuardarProducto()" >Guardar</button>
                                    <button type="button" class="btn btn-success update-todo" v-else @click="ActualizarProducto()" >Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form start end-->
                </div>
            </div>

        </div>
    </div>
    <div class="content-right">
        <div class="content-header row">
           
        </div>
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="app-content-overlay"></div>
                <div class="todo-app-area">
                   <div class="row">
                        <div class="col-7 bg-white">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <fieldset class="form-group position-relative has-icon-left m-0 flex-grow-1 ">
                                        <input type="text" class="form-control"  placeholder="Buscar...">
                                        <div class="form-control-position">
                                            <i class="ft-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <strong>Codigo de Barra</strong>
                                                    <hr>
                                                    producto 2
                                                    <hr>
                                                    <strong>Precio</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    producto 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 bg-white">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                
                                                    <i class="ft-trash-2" @click="EliminarProducto(producto.id)"></i>
                                                </td>                                           
                                                <td>Producto 1</td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">Total</td>
                                                <td>0</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endverbatim
@endslot
@slot('script')
<script>
    //sirve para traer una instancia de vue 
    const { createApp } = Vue;
    //usrndo la instancoa para crear una aplicacion de vue
    createApp({
        //data sirve para almacenar los datos en una aplicacion de vue
        data(){
            return {
                documentos:[],
                clientes:[],
               
                model:{
                    name:'',
                    apellido:'',
                    n_documento:'',
                    correo:'',
                    telefono:'',
                    documento_id:0,
                   
                  
                },
                showSidebar:false,
                actualizar:false,
                buscar:''
            }
        },
        computed:{
          
        },
        //los metodos que le dan dinamismo a la aplicacion se le conoce tambien como funciones 
        methods:{
            
            url(url){
                return "{{url('/')}}/"+url;
            },
            async obtenerclientes(){
                const respuesta = await axios.get("{{url('/')}}"+'/api/clientes');
                this.clientes = respuesta.data;
            },
            async get_data(path){
                const respuesta = await axios.get("{{url('/')}}"+'/api/'+path);
                return respuesta.data
            },
            async GuardarProducto(){
                let respuesta = await axios.post("{{url('/')}}"+'/api/clientes',this.model);
                await this.obtenerclientes();
                // this.clientes.push(respuesta.data);
                this.model.name = '';
                this.model.apellido = '';
                this.model.n_documento = '';
                this.model.correo = '';
                this.model.telefono = '';
                this.model.documento_id = 0;
                this.showSidebar = false; 
            },
            async ActualizarProducto(){
                let respuesta = await axios.put("{{url('/')}}"+'/api/clientes/'+this.model.id,this.model);
                await this.obtenerclientes();
                this.model.name = '';
                this.model.apellido = '';
                this.model.n_documento = '';
                this.model.correo = '';
                this.model.telefono = '';
                this.model.documento_id = 0;
                this.showSidebar = false; 
            },
            EliminarProducto(id){ 
                
               const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                title: "¿Estas seguro de eliminar?",
                text: "Si eliminas, este cambio es irreversible!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "No, cancelar!",
                reverseButtons: true
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        let respuesta = await axios.delete("{{url('/')}}"+'/api/clientes/'+id);
                        await this.obtenerclientes();
                        swalWithBootstrapButtons.fire({
                            title: "Eliminado!",
                            text: "Tu Cliente ha sido eliminada.",
                            icon: "success",
                            timer:1000
                        });
                    } 
                });
            },
           
            SeleccionarProducto(producto){
                this.model = producto;
                this.actualizar = true;
                this.showSidebar = true;
            },
           

        },
        
        mounted(){
           
            this.$nextTick(async function() {
                await this.obtenerclientes();
                await Promise.all([
                    this.get_data('documentos'),
     
                ]).then((values) => {
                    this.documentos = values[0];
             
                })
            });
        },
       
    }).mount('#app');
</script>
@endslot
@endcomponent