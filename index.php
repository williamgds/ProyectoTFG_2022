<?php

//Configuración global
require_once 'config/global.php';

require_once 'core/BaseController.php';

require_once 'core/FrontController.func.php';

if(isset($_GET["controller"])){
    $controller_object = loading_controller($_GET["controller"]);
    action_launcher($controller_object);
}else{
    $controller_object = loading_controller(CONTROLADOR_DEFECTO);
    action_launcher($controller_object);
}
?>
