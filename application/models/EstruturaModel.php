<?php
class EstruturaModel extends CI_Model{

    public function espera($id){
        $sql = "SELECT * FROM estrutura WHERE id = 1";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function recepcao($id){
        $sql = "SELECT * FROM estrutura WHERE id = 2";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function crianca($id){
        $sql = "SELECT * FROM estrutura WHERE id = 3";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function massagem($id){
        $sql = "SELECT * FROM estrutura WHERE id = 4";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function pilates($id){
        $sql = "SELECT * FROM estrutura WHERE id = 5";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function postura($id){
        $sql = "SELECT * FROM estrutura WHERE id = 6";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function escritorio($id){
        $sql = "SELECT * FROM estrutura WHERE id = 7";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function deposito($id){
        $sql = "SELECT * FROM estrutura WHERE id = 8";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }
    public function estetica($id){
        $sql = "SELECT * FROM estrutura WHERE id = 9";
        $res = $this->db->query($sql);
        $data = $res->result_array();
        return $data[0];
    }

}