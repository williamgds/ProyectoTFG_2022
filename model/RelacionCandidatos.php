<?php
/**
 * Description of RelacionCandidatos
 *
 * @author ggomezdesalazar
 */
class RelacionCandidatos extends BaseEntity{
    // Clase para obtener la relación entre candidatos y candidaturas
    private $id_candidato;
    private $id_candidatura;
    private $nombre_candidato;
    private $apellido_candidato;
    private $banda_salarial;
    private $disponibilidad;
    private $nombre_candidatura;
    private $banda_salarial_low;
    private $banda_salarial_high;
    private $estado_candidatura;
    
    public function __construct($adapter) {
        // La tabla en realidad es una vista. Hacemos esto para simplificar las lógicas
        $table = "vista_relaciones_candidaturas";
        parent::__construct($table, $adapter);
    }
     
    public function get_id_candidato() {
        return $this->id_candidato;
    }

    public function get_id_candidatura() {
        return $this->id_candidatura;
    }

    public function get_nombre_candidato() {
        return $this->nombre_candidato;
    }

    public function get_apellido_candidato() {
        return $this->apellido_candidato;
    }

    public function get_banda_salarial() {
        return $this->banda_salarial;
    }

    public function get_disponibilidad() {
        return $this->disponibilidad;
    }

    public function get_nombre_candidatura() {
        return $this->nombre_candidatura;
    }

    public function get_banda_salarial_low() {
        return $this->banda_salarial_low;
    }

    public function get_banda_salarial_high() {
        return $this->banda_salarial_high;
    }

    public function get_estado_candidatura() {
        return $this->estado_candidatura;
    }

    public function set_id_candidato($id_candidato): void {
        $this->id_candidato = $id_candidato;
    }

    public function set_id_candidatura($id_candiatura): void {
        $this->id_candidatura = $id_candidatura;
    }

    public function set_nombre_candidato($nombre_candidato): void {
        $this->nombre_candidato = $nombre_candidato;
    }

    public function set_apellido_candidato($apellido_candidato): void {
        $this->apellido_candidato = $apellido_candidato;
    }

    public function set_banda_salarial($banda_salarial): void {
        $this->banda_salarial = $banda_salarial;
    }

    public function set_disponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }

    public function set_nombre_candidatura($nombre_candidatura): void {
        $this->nombre_candidatura = $nombre_candidatura;
    }

    public function set_banda_salarial_low($banda_salarial_low): void {
        $this->banda_salarial_low = $banda_salarial_low;
    }

    public function set_banda_salarial_high($banda_salarial_high): void {
        $this->banda_salarial_high = $banda_salarial_high;
    }

    public function set_estado_candidatura($estado_candidatura): void {
        $this->estado_candidatura = $estado_candidatura;
    }
 
}
