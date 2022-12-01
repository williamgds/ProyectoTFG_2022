<?php

/**
 * Description of Candidatura
 *
 * @author ggomezdesalazar
 */
class Candidatura extends BaseEntity {
    // Declaración de variables
    private $id, $nombre_candidatura, $notas_candidatura, $estado_candidatura ,
            $banda_salarial_low, $banda_salarial_high, $tipo_jornada, $presencialidad,
            $tipo_contratacion;
    
    public function __construct($adapter) {
        $table = "candidatura";
        parent::__construct($table, $adapter);
    }
    
    public function get_id() {
        return $this->id;
    }

    public function get_nombre_candidatura() {
        return $this->nombre_candidatura;
    }

    public function get_notas_candidatura() {
        return $this->notas_candidatura;
    }

    public function get_estado_candidatura() {
        return $this->estado_candidatura;
    }

    public function get_banda_salarial_low() {
        return $this->banda_salarial_low;
    }

    public function get_banda_salarial_high() {
        return $this->banda_salarial_high;
    }

    public function get_tipo_jornada() {
        return $this->tipo_jornada;
    }

    public function get_presencialidad() {
        return $this->presencialidad;
    }

    public function get_tipo_contratacion() {
        return $this->tipo_contratacion;
    }

    public function set_id($id): void {
        $this->id = $id;
    }

    public function set_nombre_candidatura($nombre_candidatura): void {
        $this->nombre_candidatura = $nombre_candidatura;
    }

    public function set_notas_candidatura($notas_candidatura): void {
        $this->notas_candidatura = $notas_candidatura;
    }

    public function set_estado_candidatura($estado_candidatura): void {
        $this->estado_candidatura = $estado_candidatura;
    }

    public function set_banda_salarial_low($banda_salarial_low): void {
        $this->banda_salarial_low = $banda_salarial_low;
    }

    public function set_banda_salarial_high($banda_salarial_high): void {
        $this->banda_salarial_high = $banda_salarial_high;
    }

    public function set_tipo_jornada($tipo_jornada): void {
        $this->tipo_jornada = $tipo_jornada;
    }

    public function set_presencialidad($presencialidad): void {
        $this->presencialidad = $presencialidad;
    }

    public function set_tipo_contratacion($tipo_contratacion): void {
        $this->tipo_contratacion = $tipo_contratacion;
    }
    
    public function save(){
        $query = "INSERT INTO candidatura (nombre_candidatura, notas_candidatura, estado_candidatura, banda_salarial_low, banda_salarial_high,
            tipo_jornada, presencialidad, tipo_contratacion)
                VALUES('".$this->nombre_candidatura."',
                       '".$this->notas_candidatura."',
                       '".$this->estado_candidatura."',
                       '".$this->banda_salarial_low."',
                       '".$this->banda_salarial_high."',
                       '".$this->tipo_jornada."',
                       ".$this->presencialidad.",
                       '".$this->tipo_contratacion."');";
        $save = $this->db()->query($query);
        
        return $save;
    }
    
    public function update_position () {
        $query = "UPDATE candidatura SET "
                       . "nombre_candidatura = '".$this->nombre_candidatura."',
                       notas_candidatura = '".$this->notas_candidatura."',
                       estado_candidatura = '".$this->estado_candidatura."',
                       banda_salarial_low = '".$this->banda_salarial_low."',
                       banda_salarial_high = '".$this->banda_salarial_high."',
                       tipo_jornada = '".$this->tipo_jornada."',
                       presencialidad = ".$this->presencialidad.",
                       tipo_contratacion = '".$this->tipo_contratacion." '
                WHERE id = $this->id" . ";";
        
        $save = $this->db()->query($query);
               
        return $save;
    }



    
}
