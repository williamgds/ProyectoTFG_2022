<?php
/**
 * Description of RelacionCandidatosController
 *
 * @author ggomezdesalazar
 */
class RelacionCandidatosController extends BaseController {
   
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
        
        $relaciones = new RelacionCandidatos($this->adapter);
        $relations = $relaciones->get_all_for_views("id_candidato");
        $this->view("ver_relaciones",array(
            "relations" => $relations
        ));
    }
     
    
     public function erase(){
        if(isset($_GET["id_candidato"])){ 
            $id=(int)$_GET["id_candidato"];
            $rel_candidato = new AplicacionesActuales($this->adapter);
            $rel_candidato->delete_by_col("id_candidato", $id);
        }
        $this->redirect("RelacionCandidatos", "index");
    }
    
    public function create(){
        if(isset($_POST["id_candidatura"]) && isset($_GET["id_candidato"])){
            //Creamos una candidatura
            $rel_candidato = new AplicacionesActuales($this->adapter);
            $rel_candidato->set_id_candidato($_GET["id_candidato"]);
            $rel_candidato->set_id_candidatura($_POST["id_candidatura"]);
            $save = $rel_candidato->save();
            $this->redirect("RelacionCandidatos", "index");
        }
        
        
    }
    
    public function update_relation () {
        if(isset($_POST["id_candidatura"]) && isset($_POST["id_candidato"])){
            //Creamos una candidatura
            $rel_candidato = new AplicacionesActuales($this->adapter);
            $rel_candidato->get_by_specific_id("id_candidato", $_POST["id_candidato"]);
            $save = $rel_candidato->update_by_specific_id("id_candidatura", $_POST["id_candidatura"], $_POST["id_candidato"], "id_candidato");
        }
        $this->redirect("RelacionCandidatos", "index");
        
    }
    
    public function edit() {
        if(isset($_POST["id_candidatura"])) {
            $position = new Candidatura($this->adapter);
            $id = (int) $_GET["id"];
            $edit_position = $position->get_by_id($id);          
            $this->view("editar_candidatura",array(
            "edit_position" => $edit_position
        ));
                        
        }
    }
    
     public function associate_to_position() {
        if(isset($_GET["id_candidato"])) {
            $candidaturas = new Candidatura($this->adapter);
            $all_positions = $candidaturas->get_all();
            $this->view("crear_relacion", array(
               "all_positions" => $all_positions,
               "id_candidato" => $_GET["id_candidato"]
            ));
        }
    }
}
