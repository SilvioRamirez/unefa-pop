<?php
require_once 'model/estudiante.php';

class estudianteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new estudiante();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
       
    }
    
    public function registro(){
        $estudiante = new estudiante();
        
        if(isset($_REQUEST['id'])){
            $estudiante = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-editar.php';
        require_once 'view/footer.php';
        
    }

    public function buscar(){
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-buscar.php';
        require_once 'view/footer.php';
    }

    public function mostrar(){
        $estudiante = new estudiante();
        
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-mostrar.php';
        require_once 'view/footer.php';
        
    }
    
    public function Guardar(){
        $estudiante = new estudiante();
        
        $estudiante->id         = $_REQUEST['id'];
        $estudiante->cedula     = $_REQUEST['cedula'];
        $estudiante->nombre     = $_REQUEST['nombre'];
        $estudiante->apellido   = $_REQUEST['apellido'];
        $estudiante->sexo       = $_REQUEST['sexo'];
        $estudiante->semestre   = $_REQUEST['semestre'];
        $estudiante->direccion  = $_REQUEST['direccion'];
        $estudiante->telefono   = $_REQUEST['telefono'];
        $estudiante->fecha      = $_REQUEST['fecha'];
        $estudiante->duracion   = $_REQUEST['duracion'];
        $estudiante->descripcion= $_REQUEST['descripcion'];

        $estudiante->id > 0 ? $this->model->Actualizar($estudiante) : $this->model->Registrar($estudiante);
        
        header('Location: ?controller=estudiante');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ?controller=estudiante');
    }
}