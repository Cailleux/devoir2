<?php
class modelTechnologie extends CI_Model{
    function getAllTechnologies(){
        $sql = $this->db->query("select IDTECHNO, NOMTECHNO from technologie");
        return $sql->result();
    }
}


?>