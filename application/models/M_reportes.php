<?php

class M_reportes extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getDatosTabla(){
        $sql = "SELECT u.*
                FROM usuario u
               WHERE id_lenguaje = 1;";
        $result = $this->db->query($sql, array());
        return $result->result();
    }
}