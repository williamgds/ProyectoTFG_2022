<?php

class LoginController extends BaseController {
    //Controller diseñado para el login
    
    public function __construct() {
        parent::__construct();
		 
        $this->conectar = new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
     public function index(){
        if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
                $this->redirect("candidaturas","ver_candidaturas");
            } else {
               $this->view("login", array(
                   "title" => "Easy ATS"
               )); 
            }
    }
    
    public function logout () {
        session_start();
        session_destroy();
        $this->view("login", array("title" => "EasyATS"));
    }
    
   public function authorise_access() {
       if (isset($_POST["user"]) && isset($_POST["pass"])) {
           $user = $_POST["user"];
           $pass = $_POST["pass"];
           $usuario = new LoggedUser($this->adapter);
           $usuario->set_user($user);
           $usuario->set_pass($pass);
           
           $user_db = new LoggedUser($this->adapter);
           $result = $user_db->get_by_col("user", $usuario->get_user());
           
           if(count($result) == 0) {
               echo "<p>El usuario que ha introducido no existe en el sistema o la contraseña no es correcta. "
               . "Por favor, vuelva a intentarlo de nuevo o póngase en contacto con el administrador del sistema.";
               return;
           }
           
           if(password_verify($usuario->get_pass(), $result[0]->pass)){
               session_start();
               $_SESSION["logged"] = true;
               $_SESSION["user"] = $usuario->get_user();
               $this->redirect("Candidatos", "index");
               
           } else {
               echo "<p>El usuario que ha introducido no existe en el sistema o la contraseña no es correcta. "
               . "Por favor, vuelva a intentarlo de nuevo o póngase en contacto con el administrador del sistema.";
           }
       }
       
       
   }
}
