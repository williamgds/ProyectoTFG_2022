<?php

function loading_controller($controller){
    $controlador = ucwords($controller).'Controller';
    $name_file_controller = 'controller/'.$controlador.'.php';
    
    if(!is_file($name_file_controller)){
        $name_file_controller = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';   
    }
    
    require_once $name_file_controller;
    $controller_object = new $controlador();
    return $controller_object;
}

function load_action($controller_obj,$action){
    $accion=$action;
    $controller_obj->$accion();
}

function action_launcher($controller_obj){
    if(isset($_GET["action"]) && method_exists($controller_obj, $_GET["action"])){
        load_action($controller_obj, $_GET["action"]);
    }else{
        load_action($controller_obj, ACCION_DEFECTO);
    }
}

?>
