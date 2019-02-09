<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kritik_saran extends CI_Model{

    public function ambil_kritik_saran() {
        return $this->db->get('kritik_saran')->result_array();
    }

    public function ambil_kritik_saran_pelanggan($id_pelanggan) {
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get('kritik_saran')->result_array();
    }

    public function ambil_kritik_saran_byid($id_kritik_saran) {
        $this->db->where('id_kritik_saran', $id_kritik_saran);
        return $this->db->get('kritik_saran')->result_array();
    }

    public function tambah_kritik_saran($data) {
        $this->db->insert('kritik_saran', $data);
    }

    public function ambil_respon_kritik_saran($id_kritik_saran, $id_respon) {
        $this->db->where('id_kritik_saran', $id_kritik_saran);
        $this->db->where('id_respon >', $id_respon);
        return $this->db->get('respon_kritik_saran')->result_array();
    }

    public function tambah_respon_kritik_saran($data) {
        $this->db->insert('respon_kritik_saran', $data);
        return $this->db->insert_id();
    }

    public function hapus_kritik_saran($id_kritik_saran) {
        $this->db->where('id_kritik_saran', $id_kritik_saran);
        $this->db->delete('kritik_saran');
        return $this->db->affected_rows();
    }
}