<?php
class modelNiveau extends CI_Model{
    function getAllNiveaux(){
        $sql = $this->db->query("select IDNIVEAU, NIVEAU from niveau");
        return $sql->result();
    }
}




?>