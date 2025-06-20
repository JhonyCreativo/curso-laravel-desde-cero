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
                                        <input type="text" class="form-control"  placeholder="Buscar..." v-model="buscar">
                                        <div class="form-control-position">
                                            <i class="ft-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="row">
                                       <template v-for="m in filtroProductos">
                                            <div class="col-2">
                                                <div class="card card-producto" @click="AgregarProductoCarrito(m)">
                                                    <div class="card-body">
                                                        <strong>{{m.codigo_barra}}</strong>
                                                        <hr>
                                                        {{m.name}}
                                                        <hr>
                                                        <strong>S/ {{m.precio}}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
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
                                                <th scope="col">Descuento</th>
                                                <th scope="col">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(m,index) in CarritoModel">
                                                <td>
                                                
                                                    <i class="ft-trash-2" @click="EliminarProducto(index)"></i>
                                                </td>                                           
                                                <td>{{m.name}}</td>
                                                <td>{{m.cantidad}}</td>
                                                <td>S/ {{m.precio}}</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" >
                                                </td>
                                                <td>S/ {{m.subtotal}}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                <td colspan="5" class="text-right"><h6><strong>Descuento</strong></h6></td>
                                                <td><h6><strong>S/ {{Total}}</strong> </h6></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right"><h6><strong>Subtotal</strong></h6></td>
                                                <td><h6><strong>S/ {{Total}}</strong> </h6></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right"><h6><strong>IGV</strong></h6></td>
                                                <td><h6><strong>S/ {{Total}}</strong> </h6></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right"><h5><strong>TOTAL</strong></h5></td>
                                                <td><h5><strong>S/ {{Total}}</strong> </h5></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Descuento Global (%)</label>
                                        <input type="text" class="form-control form-control-sm" v-model="DescuentoGlobal">
                                    </div>
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
                productos:[],
                carrito:[],
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
            filtroProductos(){
                if(this.buscar==""){
                    return this.productos
                }else{
                    return this.productos.filter((producto)=>{
                        return producto.name.toLowerCase().indexOf(this.buscar.toLowerCase())>-1 || producto.codigo_barra.toLowerCase().indexOf(this.buscar.toLowerCase())>-1
                    })
                }
            },
            CarritoModel(){
                return this.carrito.map((m)=>{
                    m.subtotal = Number(m.precio * m.cantidad).toFixed(2)
                    return m
                })
            },
            Total(){
                let total = this.CarritoModel.reduce((a,b)=>{
                    return Number(a) + Number(b.subtotal)
                },0)
                return Number(total).toFixed(2)
            }
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
            AgregarProductoCarrito(producto){
                let item = {...producto};
                let buscarCoincidencia = this.carrito.find((m)=>{
                    return m.id == item.id
                })
                if(buscarCoincidencia){
                    buscarCoincidencia.cantidad++ // buscarCoincidencia.cantidad = buscarCoincidencia.cantidad + 1
                    return
                }else{
                    item.cantidad = 1
                    item.descuento = 0
                    this.carrito.push(item);
                } 
            },
            EliminarProducto(index){
                this.carrito.splice(index,1)
            }            
        },
        
        mounted(){
           
            this.$nextTick(async function() {
                await this.obtenerclientes();
                await Promise.all([
                    this.get_data('productos'),
     
                ]).then((values) => {
                    this.productos = values[0];
             
                })
            });
        },
       
    }).mount('#app');
</script>
@endslot
@endcomponent