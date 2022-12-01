<?php
class BaseEntity {
    private $table;
    private $db;
    private $conectar;

    public function __construct($table, $adapter) {
        $this->table=(string) $table;
       	$this->conectar = null;
	$this->db = $adapter;
    }
    
    public function get_connection(){
        return $this->conectar;
    }
    
    public function db(){
        return $this->db;
    }
    
    public function get_all(){
        $table = mysqli_real_escape_string($this->db, $this->table);
        $query=$this->db->query("SELECT * FROM $table ORDER BY id DESC");

        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function get_all_for_views($col){
        $table = mysqli_real_escape_string($this->db, $this->table);
        $secure_col = mysqli_real_escape_string($this->db, $col);
        $query=$this->db->query("SELECT * FROM $table ORDER BY $secure_col DESC");

        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function get_by_id($id){
        $table = mysqli_real_escape_string($this->db, $this->table);
        $secure_id = mysqli_real_escape_string($this->db, $id);
        $query=$this->db->query("SELECT * FROM $table WHERE id = $secure_id");
        if($row = $query->fetch_object()) {
           $resultSet = $row;
        }
        
        return $resultSet;
    }
    
    public function get_by_specific_id($col_id, $id) {
        $query = $this->db->query("SELECT * FROM $this->table WHERE $col_id = $id");
        if($row = $query->fetch_object()) {
           $resultSet = $row;
        }
        return $resultSet;
    }
    
    public function get_by_col($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column = '$value'");

        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function delete_by_id($id){
        $query = $this->db->query("DELETE FROM $this->table WHERE id = $id"); 
        return $query;
    }
    
    public function delete_by_col($column,$value){
        $query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }
    
    public function update_by_id($column, $value, $id){
        $query = $this->db ->query("UPDATE $this->table SET $column ='$value' WHERE id = $id");
        return $query;
    }
    
    public function update_by_specific_id($column, $value, $id, $id_column) {
        $query = $this->db ->query("UPDATE $this->table SET $column ='$value' WHERE $id_column = $id");
        
    }
}
?>
