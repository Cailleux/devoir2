<?php


class modelInsertConf extends CI_Model
{
    public function insertNewConf($titreConf, $contenuConf)
    {
        $sql = $this->db->query("select * from conference where TITRE = ".$titreConf." and CONTENU = ".$contenuConf."'");
        if(count($sql->result()) == 0)
        {
            //$sql = $this->db->query("insert into conference values(".$numeroConf.","","",".$titreConf.")");
            return "Nouvelle conférence inséré !!!";
        }
    }
}