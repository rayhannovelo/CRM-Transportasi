<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faq extends CI_Model{

    public function ambil_faq() {
        return $this->db->get('faq')->result_array();
    }

    public function ambil_faq_byid($id_faq) {
    	$this->db->where('id_faq', $id_faq);
        return $this->db->get('faq')->result_array();
    }

    public function tambah_faq($data) {
    	$this->db->insert('faq', $data);
    }

    public function edit_faq($data, $id_faq) {
    	$this->db->where('id_faq', $id_faq);
    	$this->db->update('faq', $data);
    }

    public function hapus_faq($id_faq) {
    	$this->db->where('id_faq', $id_faq);
        $this->db->delete('faq');
    }
}