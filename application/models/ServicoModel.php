<?php
class ServicoModel extends CI_Model{

    public function pilates($id){
        $sql = "SELECT * FROM servico_fisio WHERE id = 1";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function massagem($id){
        $sql = "SELECT * FROM servico_fisio WHERE id = 2";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function acupuntura($id){
        $sql = "SELECT * FROM servico_fisio WHERE id = 3";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function postura($id){
        $sql = "SELECT * FROM servico_fisio WHERE id = 4";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function estetica($id){
        $sql = "SELECT * FROM servico_fisio WHERE id = 5";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    
    

}