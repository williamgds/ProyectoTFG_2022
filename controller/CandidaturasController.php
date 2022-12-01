<?php

class CandidaturasController extends BaseController {
    public $conectar;
    public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar = new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
     public function index(){
         // Comprobación de si estamos logados
        session_start();
        if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] == true)) {
           $this->view("login", array("title" => "EasyATS"));
           return;
        }
        
        $candidatura = new Candidatura($this->adapter);
        $positions = $candidatura->get_all();
        $this->view("ver_candidaturas",array(
            "positions" => $positions
        ));
    }
    
     public function crear_candidatura() {
        session_start();
        if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] == true)) {
            echo $_SESSION["logged"];
            echo "Paso por aquí";+
           $this->view("login", array("title" => "EasyATS"));
           return;
        }
        $this->view("crear_candidatura", array(
            "titulo" => "Easy ATS"
        ));
        
    }
    
     public function erase(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            $candidatura=new Candidatura($this->adapter);
            $candidatura->delete_by_id($id); 
        }
        $this->redirect("Candidaturas", "ver_candidaturas");
    }
    
    public function create(){
        if(isset($_POST["nombre_candidatura"])){
            //Creamos una candidatura
            $candidatura = new Candidatura($this->adapter);
            $candidatura->set_nombre_candidatura($_POST["nombre_candidatura"]);
            $candidatura->set_notas_candidatura($_POST["notas_candidatura"]);
            $candidatura->set_estado_candidatura($_POST["estado_candidatura"]);
            $candidatura->set_banda_salarial_low($_POST["banda_salarial_low"]);
            $candidatura->set_banda_salarial_high($_POST["banda_salarial_high"]);
            $candidatura->set_tipo_jornada($_POST["tipo_jornada"]);
            $candidatura->set_presencialidad($_POST["presencialidad"]);
            $candidatura->set_tipo_contratacion($_POST["tipo_contratacion"]);
            $save = $candidatura->save();
        }
        $this->redirect("Candidaturas", "ver_candidaturas");
        
    }
    
    public function update_position () {
        if(isset($_POST["nombre_candidatura"])){
            //Creamos una candidatura para la edición
            $candidatura = new Candidatura($this->adapter);
            $id = (int) $_GET["id"];
            $candidatura->set_id($id);
            $candidatura->set_nombre_candidatura($_POST["nombre_candidatura"]);
            $candidatura->set_notas_candidatura($_POST["notas_candidatura"]);
            $candidatura->set_estado_candidatura($_POST["estado_candidatura"]);
            $candidatura->set_banda_salarial_low($_POST["banda_salarial_low"]);
            $candidatura->set_banda_salarial_high($_POST["banda_salarial_high"]);
            $candidatura->set_tipo_jornada($_POST["tipo_jornada"]);
            $candidatura->set_presencialidad($_POST["presencialidad"]);
            $candidatura->set_tipo_contratacion($_POST["tipo_contratacion"]);
            $save = $candidatura->update_position();
        }
        $this->redirect("Candidaturas", "ver_candidaturas");
    }
    
    public function edit() {
        if(isset($_GET["id"])) {
            $position = new Candidatura($this->adapter);
            $id = (int) $_GET["id"];
            $edit_position = $position->get_by_id($id);          
            $this->view("editar_candidatura",array(
            "edit_position" => $edit_position
        ));
                        
        }
    }
    
}
