<?php
class modelTheme extends CI_Model{
    function getAllThemes(){
        $sql = $this->db->query("select IDTHEME, IDPARCOURS, LIBELLETHEME from theme");
        return $sql->result();
    }
}




?>