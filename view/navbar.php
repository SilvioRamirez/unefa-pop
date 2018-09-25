<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <a class="navbar-brand padding-bottom-0 padding-top-0" href="#">
        <img src="images/logo_unefa.png" width="40" height="40" alt="UNEFA" class="rounded-circle">
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=index"><i class="fa fa-home"></i> Inicio <span class="sr-only"></span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-graduate"></i> Estudiantes</a>
                        <div class="dropdown-menu" x-placemente="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <a class="dropdown-item" href="?controller=estudiante&accion=registro"><i class="fa fa-plus"></i> Registrar</a>
                            <a class="dropdown-item" href="?controller=estudiante&accion=buscar"><i class="fa fa-search"></i> Buscar</a>
                            <a class="dropdown-item" href="?controller=estudiante"><i class="fa fa-eye"></i> Ver</a>
                        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-tie"></i> Profesores</a>
                        <div class="dropdown-menu" x-placemente="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <a class="dropdown-item" href="?controller=profesor&accion=registro"><i class="fa fa-plus"></i> Registrar</a>
                            <a class="dropdown-item" href="?controller=profesor&accion=buscar"><i class="fa fa-search"></i> Buscar</a>
                            <a class="dropdown-item" href="?controller=profesor"><i class="fa fa-eye"></i> Ver</a>
                        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-hospital"></i> Reposos</a>
                        <div class="dropdown-menu" x-placemente="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <a class="dropdown-item" href="#"><i class="fa fa-plus"></i> Registrar</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-search"></i> Buscar</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users"></i> Usuarios</a>
                        <div class="dropdown-menu" x-placemente="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <a class="dropdown-item" href="#"><i class="fa fa-plus"></i> Registrar</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-search"></i> Buscar</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                        
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-book"></i> Manual</a>
                </li>

        </ul>

        <ul class="navbar-nav ml-auto">
                <li><a class="nav-link" href=""><i class="fas fa-sign-in-alt"></i> Iniciar Sesion</a></li>
                <li><a class="nav-link" href=""><i class="fas fa-user-plus"></i>Registrarse</a></li>
                
                <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user"></i>
                           <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> 
                                Cerrar Sesion
                            </a>

                            <form id="logout-form" action="" method="POST" style="display: none;">
                                
                            </form>
                        </div>
                    </li>
          

        </ul>
        
    </div>
</nav>