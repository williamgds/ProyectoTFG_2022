<?php

class AplicacionesActuales extends BaseEntity{
    // Clase muy simple para gestionar las relaciones entre candidatos y candidaturas.
    //  No tiene métodos propios porque directamente se utilizan los heredados de la clase padre.
    private $id_candidato;
    private $id_candidatura;
    
    public function __construct($adapter) {
        $table = "aplicaciones_actuales";
        parent::__construct($table, $adapter);
    }
    
    public function get_id_candidato() {
        return $this->id_candidato;
    }

    public function get_id_candidatura() {
        return $this->id_candidatura;
    }

    public function set_id_candidato($id_candidato): void {
        $this->id_candidato = $id_candidato;
    }

    public function set_id_candidatura($id_candidatura): void {
        $this->id_candidatura = $id_candidatura;
    }

    public function save() {
        $query = "INSERT INTO aplicaciones_actuales VALUES (" . $this->id_candidato . ", " . $this->id_candidatura . ");";
        $save = $this->db()->query($query);
        return $save;
    }
    
    
}
