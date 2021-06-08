<?php

class Model extends CI_Model{
    public function tampil_data(){
        return $this->db->get('barang');
    }
}
?>