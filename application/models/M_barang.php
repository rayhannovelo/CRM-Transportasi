<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model{

    public function ambil_barang(){
        return $this->db->get('barang')->result_array();
    }
}