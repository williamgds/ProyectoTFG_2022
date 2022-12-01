<?php
class CandidatosController extends BaseController{
    public $conectar;
    public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar = new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
       
        session_start();
        if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] == true)) {
           $this->view("login", array("title" => "EasyATS"));
           return;
        }
        
        $candidato = new Candidato($this->adapter);
        $candidates = $candidato->get_all();
        $this->view("index",array(
            "candidates" => $candidates
        ));
    }
    
    // Vista de creación de candidato
    public function crear_candidato() {
        session_start();
         // Comprobación de si estamos logados
        
        if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] == true)) {
           $this->view("login", array("title" => "EasyATS"));
           return;
        }
        
        $this->view("crear_candidato", array(
            "titulo" => "Easy ATS"
        ));
        
    }
        
    public function create(){
        if(isset($_POST["nombre"])){
            $candidato = new Candidato($this->adapter);
            $candidato->set_nombre($_POST["nombre"]);
            $candidato->set_apellido_1($_POST["apellido_1"]);
            $candidato->set_apellido_2($_POST["apellido_2"]);
            $candidato->set_banda_salarial($_POST["banda_salarial"]);
            $candidato->set_calificacion($_POST["calificacion"]);
            $candidato->set_correo_contacto($_POST["correo_contacto"]);
            $candidato->set_disponibilidad($_POST["disponibilidad"]);
            $candidato->set_telefono_movil($_POST["telefono_movil"]);
            $candidato->set_genero($_POST["genero"]);
            $save = $candidato->save();
        }
        $this->redirect("Candidatos", "index");
    }
    
    public function erase(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            $candidato = new Candidato($this->adapter);
            $candidato->delete_by_id($id); 
        }
        $this->redirect("Candidatos", "index");
    }
    
    public function update_candidate () {
        if(isset($_GET["id"]) && isset($_POST["nombre"])) {
            $edit_candidate = new Candidato($this->adapter);
            $id = (int) $_GET["id"];
            $edit_candidate->set_id($id);
            $edit_candidate->set_nombre($_POST["nombre"]);
            $edit_candidate->set_apellido_1($_POST["apellido_1"]);
            $edit_candidate->set_apellido_2($_POST["apellido_2"]);
            $edit_candidate->set_banda_salarial($_POST["banda_salarial"]);
            $edit_candidate->set_calificacion($_POST["calificacion"]);
            $edit_candidate->set_correo_contacto($_POST["correo_contacto"]);
            $edit_candidate->set_disponibilidad($_POST["disponibilidad"]);
            $edit_candidate->set_telefono_movil($_POST["telefono_movil"]);
            $edit_candidate->set_genero($_POST["genero"]);
            $query_result = $edit_candidate->update_candidate();
            $this->redirect("Candidatos", "index");
            
        }
    }
    
    public function edit() {
        if(isset($_GET["id"])) {
            $candidato = new Candidato($this->adapter);
            $id = (int) $_GET["id"];
            $edit_candidate = $candidato->get_by_id($id);          
            $this->view("editar_candidato",array(
            "edit_candidate" => $edit_candidate
        ));
                        
        }
    }
    
}
?>
