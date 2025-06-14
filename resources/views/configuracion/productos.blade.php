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
                    <div class="form-group text-center add-task">
                        <!-- new task button -->
                        <button type="button" class="btn btn-danger btn-glow add-task-btn btn-block my-1" @click="(showSidebar = true, actualizar=false)">
                            <i class="ft-plus"></i>
                            <span>Nuevo Producto</span>
                        </button>
                    </div>
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
                            <a :href="url('productos')" class="list-group-item border-0 active">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Productos</span>
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
                            <h5 class="new-task-title mb-0">Nuevo Producto</h5>
                            
                            
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
                                   <input type="text" name="" class="form-control" placeholder="Codigo de Barra" id="" v-model="model.codigo_barra">
                                   
                                </div>
                               
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Precio Costo" id="" v-model="model.costo">
                                   
                                </div>
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Precio Venta" id="" v-model="model.precio">
                                   
                                </div>
                                <div class="form-group">
                                   <input type="text" name="" class="form-control" placeholder="Stock Minimo" id="" v-model="model.stock_minimo">
                                   
                                </div>
                                <div class="form-group">
                                  <select name="" class="form-control" v-model="model.marca_id">
                                    <option value="0" selected> Seleccionar Marca</option>
                                    <template v-for="marca in marcas">
                                        <option :value="marca.id">{{marca.name}}</option>
                                    </template>
                                  </select>
                                   
                                </div>
                                <div class="form-group">
                                  <select name="" class="form-control" v-model="model.medida_id">
                                    <option value="0" selected> Seleccionar medida</option>
                                    <template v-for="medida in medidas">
                                        <option :value="medida.id">{{medida.name}} | {{medida.prefijo}}</option>
                                    </template>
                                  </select>
                                   
                                </div>
                                <div class="form-group">
                                  <select name="" class="form-control" v-model="model.categoria_id">
                                    <option value="0" selected> Seleccionar categoria</option>
                                    <template v-for="categoria in categorias">
                                        <option :value="categoria.id">{{categoria.name}}</option>
                                    </template>
                                  </select>
                                   
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
                    <div class="todo-app-list-wrapper">
                        <div class="todo-app-list">
                            <div class="todo-fixed-search d-flex justify-content-between align-items-center">
                                <div class="sidebar-toggle d-block d-lg-none">
                                    <i class="ft-align-justify"></i>
                                </div>
                                <fieldset class="form-group position-relative has-icon-left m-0 flex-grow-1 pl-2">
                                    <input type="text" class="form-control" v-model="buscar" placeholder="Buscar...">
                                    <div class="form-control-position">
                                        <i class="ft-search"></i>
                                    </div>
                                </fieldset>
                              
                            </div>
                            <div class="todo-task-list list-group">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Codigo de Barra</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(producto,index) in ProductoFiltros" >
                                            <tr>
                                                <td>{{producto.codigo_barra}}</td>
                                                <td>{{producto.name}}</td>
                                                <td>{{producto.categoria.name}}</td>
                                                <td>
                                                    <i class="ft-edit-2" @click="SeleccionarProducto(producto)"></i>
                                                    <i class="ft-trash-2" @click="EliminarProducto(producto.id)"></i>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                                <!-- task list start -->
                             
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
                productos:[],
                marcas:[],
                medidas:[],
                categorias:[],
                model:{
                    name:'',
                    codigo_barra:'',
                    medida_id:0,
                    marca_id:0,
                    categoria_id:0,
                    precio:0,
                    costo:0,
                    stock_minimo:0
                },
                showSidebar:false,
                actualizar:false,
                buscar:''
            }
        },
        computed:{
            ProductoFiltros(){
                if(this.buscar==""){
                    return this.productos
                }else{
                    return this.productos.filter((medida)=>{
                        return medida.name.toLowerCase().indexOf(this.buscar.toLowerCase())>-1 || medida.codigo_barra.toLowerCase().indexOf(this.buscar.toLowerCase())>-1
                    })
                }
            }
        },
        //los metodos que le dan dinamismo a la aplicacion se le conoce tambien como funciones 
        methods:{
            
            url(url){
                return "{{url('/')}}/"+url;
            },
            async obtenerProductos(){
                const respuesta = await axios.get("{{url('/')}}"+'/api/productos');
                this.productos = respuesta.data;
            },
            async get_data(path){
                const respuesta = await axios.get("{{url('/')}}"+'/api/'+path);
                return respuesta.data
            },
            async GuardarProducto(){
                let respuesta = await axios.post("{{url('/')}}"+'/api/productos',this.model);
                // await this.obtenerProductos();
                this.productos.push(respuesta.data);
                this.model.name = '';
                this.model.codigo_barra = '';
                this.model.precio = 0;
                this.model.costo = 0;
                this.model.stock_minimo = 0;
                this.model.categoria_id = 0;
                this.model.marca_id = 0;
                this.model.medida_id = 0;
                this.showSidebar = false; 
            },
            async ActualizarProducto(){
                let respuesta = await axios.put("{{url('/')}}"+'/api/productos/'+this.model.id,this.model);
                await this.obtenerProductos();
                this.model.name = '';
                this.model.codigo_barra = '';
                this.model.precio = 0;
                this.model.costo = 0;
                this.model.stock_minimo = 0;
                this.model.categoria_id = 0;
                this.model.marca_id = 0;
                this.model.medida_id = 0;
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
                        let respuesta = await axios.delete("{{url('/')}}"+'/api/productos/'+id);
                        await this.obtenerProductos();
                        swalWithBootstrapButtons.fire({
                            title: "Eliminado!",
                            text: "Tu tarea ha sido eliminada.",
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
                await this.obtenerProductos();
                await Promise.all([
                    this.get_data('marcas'),
                    this.get_data('categorias'),
                    this.get_data('medidas')
                ]).then((values) => {
                    this.marcas = values[0];
                    this.categorias = values[1];
                    this.medidas = values[2];
                })
            });
        },
       
    }).mount('#app');
</script>
@endslot
@endcomponent