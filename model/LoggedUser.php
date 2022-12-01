<?php

class LoggedUser extends BaseEntity{
   
    private $id;
    private $user;
    private $pass;
    private $rol_id;
    private $activo;
    
    private $db_table;
    
    public function __construct($adapter) {
        $table = "total_users";
        parent::__construct($table, $adapter);
    }
    
    public function get_user() {
        return $this->user;
    }

    public function get_pass() {
        return $this->pass;
    }

    public function get_rol_id() {
        return $this->rol_id;
    }

    public function get_activo() {
        return $this->activo;
    }

    public function set_user($user): void {
        $this->user = $user;
    }

    public function set_pass($pass): void {
        $this->pass = $pass;
    }

    public function set_rol_id($rol_id): void {
        $this->rol_id = $rol_id;
    }

    public function set_activo($activo): void {
        $this->activo = $activo;
    }

    public function update_password(){
        $query = "UPDATE $this->db_table SET pass = '". password_hash($this->pass) ."' WHERE id = $this->id;";
        $save = $this->db()->query($query);
        return $save;
    }
    
}
