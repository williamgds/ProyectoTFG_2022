<?php
/**
 * Description of Candidato
 *
 * @author ggomezdesalazar
 */
class Candidato extends BaseEntity {
   
    private $id;
    private $nombre;
    private $apellido_1;
    private $apellido_2;
    private $genero;
    private $correo_contacto;
    private $banda_salarial;
    private $disponibilidad;
    private $calificacion;
    private $path_cv;
    private $telefono_movil;  
       
    
    public function __construct($adapter) {
        $table = "candidato";
        parent::__construct($table, $adapter);
    }
    
    public function get_id() {
        return $this->id;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function get_apellido_1() {
        return $this->apellido_1;
    }

    public function get_apellido_2() {
        return $this->apellido_2;
    }

    public function get_genero() {
        return $this->genero;
    }

    public function get_correo_contacto() {
        return $this->correo_contacto;
    }

    public function get_banda_salarial() {
        return $this->banda_salarial;
    }

    public function get_disponibilidad() {
        return $this->disponibilidad;
    }

    public function get_calificacion() {
        return $this->calificacion;
    }

    public function get_path_cv() {
        return $this->path_cv;
    }

    public function get_telefono_movil() {
        return $this->telefono_movil;
    }

    public function set_id($id): void {
        $this->id = $id;
    }

    public function set_nombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function set_apellido_1($apellido_1): void {
        $this->apellido_1 = $apellido_1;
    }

    public function set_apellido_2($apellido_2): void {
        $this->apellido_2 = $apellido_2;
    }

    public function set_genero($genero): void {
        $this->genero = $genero;
    }

    public function set_correo_contacto($correo_contacto): void {
        $this->correo_contacto = $correo_contacto;
    }

    public function set_banda_salarial($banda_salarial): void {
        $this->banda_salarial = $banda_salarial;
    }

    public function set_disponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }

    public function set_calificacion($calificacion): void {
        $this->calificacion = $calificacion;
    }

    public function set_path_cv($path_cv): void {
        $this->path_cv = $path_cv;
    }

    public function set_telefono_movil($telefono_movil): void {
        $this->telefono_movil = $telefono_movil;
    }
     public function save(){
        $query = "INSERT INTO candidato (nombre, apellido_1, apellido_2, genero,
            correo_contacto, banda_salarial, disponibilidad, calificacion,
            telefono_movil)
                VALUES('".$this->nombre."',
                       '".$this->apellido_1."',
                       '".$this->apellido_2."',
                       '".$this->genero."',
                       '".$this->correo_contacto."',
                       '".$this->banda_salarial."',
                       '".$this->disponibilidad."',
                       '".$this->calificacion."',
                       '".$this->telefono_movil."');";
        $save=$this->db()->query($query);
        
        return $save;
    }
    
    public function update_candidate () {
        $query = "UPDATE candidato SET "
                       . "nombre = '".$this->nombre."',
                       apellido_1 = '".$this->apellido_1."',
                       apellido_2 = '".$this->apellido_2."',
                       genero = '".$this->genero."',
                       correo_contacto = '".$this->correo_contacto."',
                       banda_salarial = '".$this->banda_salarial."',
                       disponibilidad = '".$this->disponibilidad."',
                       calificacion = '".$this->calificacion."',
                       telefono_movil = '".$this->telefono_movil."' "
                . "WHERE id = $this->id" . ";";
        
        $save = $this->db()->query($query);
        
        return $save;
    }

}
