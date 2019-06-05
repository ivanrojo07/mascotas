<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: #1c3160;">
    
    <a class="navbar-brand imagenHeader-i" style="display: none" href="/">
        Sigvaris
    </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                     <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Proveedores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('provedores.create') }}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('provedores.index') }}"><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>      
                

                
                   {{--  <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Pacientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li> --}}                
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Doctores
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li> --}}
                

                
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Recursos Humanos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('empleados/create')}}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ url('empleados') }}"><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>  
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Precargas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="}">Descuentos<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Contratos<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Faltas<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Áreas<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Puestos<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Bajas<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Bancos<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Niveles<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Estados<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Giros<i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href="">Hospitales<i class="fa fa-plus float-right"></i></a>
                        </div>
                    </li>   --}}  
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Punto de Venta
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Venta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Historial</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>     --}}
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Excel</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>     --}}
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            C.R.M.
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>General</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>    
                
                
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Oficinas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Crear</span><i class="fa fa-plus float-right"></i></a>
                        </div>
                    </li>    
                

                
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                Usuarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                                <a class="dropdown-item" href=""><span>Roles</span><i class="fa fa-search float-right"></i></a>
                    
                    
                                <a class="dropdown-item" href=""><span>Usuarios</span><i class="fa fa-search float-right"></i></a>
                    
                
                        </div>
                    </li> --}}
                
                
                
                {{-- <a  class="btn btn-info btn-sm" href="{{ url('logout') }}">
                        <strong>
                            <i class="far fa-save"></i>
                           <i class="fas fa-sign-out-alt"></i>
                            Salir
                        </strong>
                </a>
     --}}

            </ul>
        </div>
    </nav>
</div>
<!-- <div class="row m-0 p-0 text-white" style="background-color: #1c3160;">
    <div class="col">
        <ul id="pestanias" class="nav nav-tabs">
            <li id="pestania_1" class="nav-item">
                <a class="text-white nav-link pestania" onclick="abrirPestania('pestania_1')" href="#"><span>Prueba </span><span style="font-size: 1.2em;"><i onclick="cerrarPestania('pestania_${no_pestanias}')" class="fas fa-times-circle ml-2"></i></span></a>
            </li>
        </ul>
    </div>
</div> -->
<script>

    var no_pestanias = 0;
    $(document).ready(function(){

        //CREAR PESTAÑA
        $('.dropdown-item').click({url: 'www.facebook.com'}, crearPestania);

        //CERRAR PESTAÑA





        



    });

    function crearPestania(event){
        no_pestanias++;
        //alert(no_pestanias);
        let titulo = event.data.url;
        let nuevapestania = `<li id="pestania_${no_pestanias}" class="nav-item">
                                <a class="text-white nav-link pestania" onclick="abrirPestania('pestania_${no_pestanias}')" href="#"><span> ${titulo + no_pestanias} </span><span style="font-size: 1.2em;"><i onclick="cerrarPestania('pestania_` + no_pestanias + `')" class="fas fa-times-circle ml-2"></i></span></a>
                            </li>`
        $('#pestanias').append(nuevapestania);
        //return false;
    }

    function cerrarPestania(id){
        alert('#'+id);
        $('#'+id).remove();
    }

    function abrirPestania(id){
        $('.nav-link.pestania').removeClass('active text-dark');
        $('.nav-link.pestania').addClass('text-white');
        $('#'+id).find('a').addClass('active text-dark');
        
    }
</script>