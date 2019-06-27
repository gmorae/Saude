<?php

class Contato {

    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    public function gravar($data){
        $this->db->insert('contato_saude', $data);
        return;
    } 
    public function listaContato(){
        $sql = "SELECT * FROM  contato_saude";
        $rs = $this->db->query($sql);
        return $rs->result();
    }
}

