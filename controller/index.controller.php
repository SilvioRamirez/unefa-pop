<?php
/*require_once 'model/cliente.php';*/

class indexController{
    
    private $model;
    
    public function __CONSTRUCT(){
        /*$this->model = new cliente();*/
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/index/index.php';
        require_once 'view/footer.php';
    }
}