<?php
require_once 'model/profesor.php';

class profesorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new profesor();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/profesor/profesor.php';
        require_once 'view/footer.php';
       
    }
    
    public function registro(){
        $profesor = new profesor();
        
        if(isset($_REQUEST['id'])){
            $profesor = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/profesor/profesor-editar.php';
        require_once 'view/footer.php';
        
    }

    public function buscar(){
        require_once 'view/header.php';
        require_once 'view/profesor/profesor-buscar.php';
        require_once 'view/footer.php';
    }

    public function mostrar(){
        $profesor = new profesor();
        
        require_once 'view/header.php';
        require_once 'view/profesor/profesor-mostrar.php';
        require_once 'view/footer.php';
        
    }
    
    public function Guardar(){
        $profesor = new profesor();
        
        $profesor->id         = $_REQUEST['id'];
        $profesor->cedula     = $_REQUEST['cedula'];
        $profesor->nombre     = $_REQUEST['nombre'];
        $profesor->apellido   = $_REQUEST['apellido'];
        $profesor->sexo       = $_REQUEST['sexo'];
        $profesor->direccion  = $_REQUEST['direccion'];
        $profesor->telefono   = $_REQUEST['telefono'];
        $profesor->carreras   = $_REQUEST['carreras'];
        $profesor->dias       = $_REQUEST['dias'];
        $profesor->fecha      = $_REQUEST['fecha'];
        $profesor->duracion   = $_REQUEST['duracion'];
        $profesor->descripcion= $_REQUEST['descripcion'];

        $profesor->id > 0 ? $this->model->Actualizar($profesor) : $this->model->Registrar($profesor);
        
        header('Location: ?controller=profesor');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ?controller=profesor');
    }
}