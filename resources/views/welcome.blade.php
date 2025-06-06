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
                        <button type="button" class="btn btn-danger btn-glow add-task-btn btn-block my-1">
                            <i class="ft-plus"></i>
                            <span>New Task</span>
                        </button>
                    </div>
                    <!-- sidebar list start -->
                    <div class="sidebar-menu-list">
                        <div class="list-group">
                            <a href="#" class="list-group-item border-0 active">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-align-justify"></i>
                                </span>
                                <span> Todos</span>
                            </a>
                        </div>
                        <label class="filter-label mt-2 mb-1 pt-25">Filtros</label>
                        <div class="list-group">
                            <a href="#" class="list-group-item border-0">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-star"></i>
                                </span>
                                <span>Favourites</span>
                            </a>
                            <a href="#" class="list-group-item border-0">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-check"></i>
                                </span>
                                <span>Done</span>
                            </a>
                            <a href="#" class="list-group-item border-0">
                                <span class="fonticon-wrap mr-50">
                                    <i class="ft-trash-2"></i>
                                </span>
                                <span>Deleted</span>
                            </a>
                        </div>

                    </div>
                    <!-- sidebar list end -->
                </div>
            </div>
            <!-- todo new task sidebar -->
            <div class="todo-new-task-sidebar">
                <div class="card shadow-none p-0 m-0">
                    <div class="card-header border-bottom py-75">
                        <div class="task-header d-flex justify-content-between align-items-center">
                            <h5 class="new-task-title mb-0">Nueva Tarea</h5>
                            <button class="mark-complete-btn btn btn-primary btn-sm">
                                <i class="ft-check align-middle"></i>
                                <span class="mark-complete align-middle">Mark Complete</span>
                            </button>
                            <span class="dropdown mr-1">
                                <i class='ft-paperclip cursor-pointer mr-50'></i>
                                <a href="#" class="dropdown-toggle" id="todo-sidebar-dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true">
                                    <i class='ft-more-vertical'></i>
                                </a>
                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="todo-sidebar-dropdown">
                                    <a href="#" class="dropdown-item">Add to another project </a>
                                    <a href="#" class="dropdown-item">Create follow up task</a>
                                    <a href="#" class="dropdown-item">Print</a>
                                </span>
                            </span>
                        </div>
                        <button type="button" class="close close-icon">
                            <i class="ft-x"></i>
                        </button>
                    </div>
                    <!-- form start -->
                    <form id="compose-form" class="mt-1">
                        <div class="card-content">
                            <div class="card-body py-0 border-bottom">
                                <div class="form-group">
                                    <!-- text area for task title -->
                                    <textarea name="title" class="form-control task-title" cols="1" rows="2"
                                        placeholder="Write a Task Name" required>
                                        </textarea>
                                </div>
                                <div class="assigned d-flex justify-content-between">
                                    <div class="form-group d-flex align-items-center mr-1">
                                        <!-- users avatar -->
                                        <div class="avatar">
                                            <img src="#" class="avatar-user-image d-none" alt="#" width="38"
                                                height="38">
                                            <div class="avatar-content">
                                                <i class='ft-user font-medium-4'></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group d-flex align-items-center position-relative">
                                        <!-- date picker -->
                                        <div class="date-icon mr-50 font-medium-3">

                                            <i class='ft-calendar'></i>

                                        </div>
                                        <div class="date-picker">
                                            <input type="text" class="pickadate form-control pl-1"
                                                placeholder="Due Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom task-description">
                                <!--  Quill editor for task description -->
                                <div class="snow-container border rounded p-50">
                                    <div class="compose-editor mx-75"></div>
                                    <div class="d-flex justify-content-end">
                                        <div class="compose-quill-toolbar pb-0">
                                            <span class="ql-formats mr-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag d-flex justify-content-between align-items-center pt-1">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="ft-tag align-middle mr-25"></i>
                                        <select class="select2-assign-label form-control" multiple="multiple"
                                            id="select2-assign-label" disabled>
                                            <optgroup label="Tags">
                                                <option value="Frontend">Frontend</option>
                                                <option value="Backend">Backend</option>
                                                <option value="Issue">Issue</option>
                                                <option value="Design">Design</option>
                                                <option value="Wireframe">Wireframe</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="ml-25">
                                        <i class="ft-plus-circle cursor-pointer add-tags"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="avatar mr-75">
                                        <img src="{{asset('app-assets/images/portrait/small/avatar-s-3.png')}}"
                                            alt="charlie" width="38" height="38">
                                    </div>
                                    <div class="avatar-content">
                                        Charlie created this task
                                    </div>
                                    <small class="ml-75 text-muted">13 days ago</small>
                                </div>
                                <!-- quill editor for comment -->
                                <div class="snow-container border rounded p-50 ">
                                    <div class="comment-editor mx-75"></div>
                                    <div class="d-flex justify-content-end">
                                        <div class="comment-quill-toolbar pb-0">
                                            <span class="ql-formats mr-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-primary comment-btn">
                                            <span>Comment</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-1 d-flex justify-content-end">
                                    <button type="button" class="btn btn-danger add-todo">Add Task</button>
                                    <button type="button" class="btn btn-danger update-todo">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                    <input type="text" class="form-control todo-search" id="todo-search"
                                        placeholder="Buscar tarea...">
                                    <div class="form-control-position">
                                        <i class="ft-search"></i>
                                    </div>
                                </fieldset>

                            </div>
                            <div class="todo-task-list list-group">
                                <!-- task list start -->
                                <ul class="todo-task-list-wrapper list-unstyled" id="todo-task-list-drag">
                                    <li v-for="tarea in tareas"  class="todo-item" data-name="David Smith">
                                        <div
                                            class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                            <div class="todo-title-area d-flex">
                                                <i class='ft-more-vertical handle'></i>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1"></label>
                                                </div>
                                                <p class="todo-title mx-50 m-0 truncate">{{tarea.descripcion}}</p>
                                            </div>
                                            <div class="todo-item-action d-flex align-items-center">

                                                <div class="avatar ml-1">
                                                    <img :src="asset('app-assets/images/portrait/small/avatar-s-1.png')"
                                                        alt="avatar" height="30" width="30">
                                                </div>
                                                <a class='todo-item-favorite ml-75'><i class="ft-star"></i></a>
                                                <a class='todo-item-delete ml-75'><i class="ft-trash-2"></i></a>
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
                }
            }
        },
        //los metodos que le dan dinamismo a la aplicacion se le conoce tambien como funciones 
        methods:{
            asset(path){
                return "{{asset('/')}}"+'/app-assets/images/portrait/small/avatar-s-1.png';
            },
            async obtenerTareas(){
                const respuesta = await axios.get("{{url('/')}}"+'/api/tareas');
                this.tareas = respuesta.data;
            }   
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