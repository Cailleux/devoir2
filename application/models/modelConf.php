<?php
class modelConf extends CI_Model{
    function getIdConf(){
        $sql = $this->db->query("select max(IDCONFERENCE) as maxConf from conference");
        return $sql->result();
    }
}




?>