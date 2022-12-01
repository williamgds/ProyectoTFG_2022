<?php
class BaseController {

    public function __construct() {
	
        require_once 'Conectar.php';
        require_once 'BaseController.php';
        require_once 'BaseEntity.php';
        
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
    
       
    public function view($vista,$datos){
        /*
        Loader de las vistas que envía los datos a las mismas
         */
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
        
        require_once 'core/ViewHelper.php';
        $helper = new ViewHelper();
    
        require_once 'view/'.$vista.'View.php';
    }
    
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }
    
    public function redirect_with_gets($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO, $variable, $valor) {
        header("Location:index.php?controller=".$controlador."&action=".$accion."&$variable="."$valor");
    }
    
}
?>
