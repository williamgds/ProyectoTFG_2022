<?php
class ViewHelper{
    
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
    
    public function url_with_variables($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO, $var, $val) {
        
        $urlString="index.php?controller=".$controlador."&action=".$accion."&$var=".$val;
        return $urlString;
    }
    
}
?>
