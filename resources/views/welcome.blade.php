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
                            <span>Nueva Tarea</span>
                        </button>
                    </div>
                    <!-- sidebar list start -->
                    <div class="sidebar-menu-list">
                       
                        <label class="filter-label mt-2 mb-1 pt-25">Configuración</label>
                        <div class="list-group">
                            <a :href="url('tareas')" class="list-group-item border-0 active" >
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
                            <h5 class="new-task-title mb-0">Nueva Tarea</h5>
                            
                            
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
                                   <input type="text" name="" class="form-control" placeholder="Tarea Descripcion" id="" v-model="model.descripcion">
                                   
                                </div>
                               
                            </div>
                
                            <div class="card-body pb-1">
                                
                                <div class="mt-1 d-flex justify-content-end">
                                    <button type="button" class="btn btn-dark add-todo" @click="showSidebar = false">Cerrar</button>
                                    <button type="button" class="btn btn-danger update-todo" v-if="actualizar==false" @click="GuardarTarea()" >Guardar</button>
                                    <button type="button" class="btn btn-success update-todo" v-else @click="ActualizarTarea()" >Actualizar</button>
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
                                    <input type="text" class="form-control" v-model="buscar" placeholder="Buscar tarea...">
                                    <div class="form-control-position">
                                        <i class="ft-search"></i>
                                    </div>
                                </fieldset>
                              
                            </div>
                            <div class="todo-task-list list-group">
                                <!-- task list start -->
                                <ul class="todo-task-list-wrapper list-unstyled" id="todo-task-list-drag">
                                    <li v-for="(tarea,index) in TareaFiltros"  class="todo-item" data-name="David Smith">
                                        <div
                                            
                                            class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center" :class="{'completed':tarea.completada==1}">
                                            <div class="todo-title-area d-flex">
                                                <i class='ft-more-vertical handle'></i>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" :id="'checkbox'+index" @click="CompletarTarea(tarea)" :checked="tarea.completada==1">
                                                    <label class="custom-control-label" :for="'checkbox'+index"></label>
                                                </div>
                                                <p @click="seleccionarTarea(tarea)" class="todo-title mx-50 m-0   truncate">{{tarea.descripcion}}</p>
                                            </div>
                                            <div class="todo-item-action d-flex align-items-center">

                                                <div class="avatar ml-1">
                                                    <img :src="asset('app-assets/images/portrait/small/avatar-s-1.png')"
                                                        alt="avatar" height="30" width="30">
                                                </div>
                                                <a class='todo-item-favorite ml-75'><i class="ft-star"></i></a>
                                                <a class='todo-item-delete ml-75' @click="EliminarTarea(tarea.id)"><i class="ft-trash-2"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                

                                </ul>
                                
                                <!-- task list end -->
                                <div class="no-results">
                                    <h5>No Items Found</h5>
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
                tareas:[],
                model:{
                    descripcion:'',
                },
                showSidebar:false,
                actualizar:false,
                buscar:''
            }
        },
        computed:{
            TareaFiltros(){
                if(this.buscar==""){
                    return this.tareas
                }else{
                    return this.tareas.filter((tarea)=>{
                        return tarea.descripcion.toLowerCase().indexOf(this.buscar.toLowerCase())>-1
                    })
                }
            }
        },
        //los metodos que le dan dinamismo a la aplicacion se le conoce tambien como funciones 
        methods:{
            asset(path){
                return "{{asset('/')}}"+'/app-assets/images/portrait/small/avatar-s-1.png';
            },
            url(url){
                return "{{url('/')}}/"+url;
            },
            async obtenerTareas(){
                const respuesta = await axios.get("{{url('/')}}"+'/api/tareas');
                this.tareas = respuesta.data;
            },
            async GuardarTarea(){
                let respuesta = await axios.post("{{url('/')}}"+'/api/tareas',this.model);
                // await this.obtenerTareas();
                this.tareas.push(respuesta.data);
                this.model.descripcion = '';
                this.showSidebar = false; 
            },
            async ActualizarTarea(){
                let respuesta = await axios.put("{{url('/')}}"+'/api/tareas/'+this.model.id,this.model);
                await this.obtenerTareas();
                this.model.descripcion = '';
                this.showSidebar = false; 
            },
            EliminarTarea(id){ 
                
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
                        let respuesta = await axios.delete("{{url('/')}}"+'/api/tareas/'+id);
                        await this.obtenerTareas();
                        swalWithBootstrapButtons.fire({
                            title: "Eliminado!",
                            text: "Tu tarea ha sido eliminada.",
                            icon: "success",
                            timer:1000
                        });
                    } 
                });
            },
            async CompletarTarea(tarea){
                tarea.completada = !tarea.completada;
                let respuesta = await axios.put("{{url('/')}}"+'/api/tareas-completadas/'+tarea.id,tarea);
                await this.obtenerTareas();
            },
            seleccionarTarea(tarea){
                this.model = tarea;
                this.actualizar = true;
                this.showSidebar = true;
            },
           

        },
        mounted(){
            this.$nextTick( function() {
                this.obtenerTareas();
            });
        }
    }).mount('#app');
</script>
@endslot
@endcomponent