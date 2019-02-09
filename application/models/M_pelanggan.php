<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model{

    public function ambil_pelanggan() {
        $this->db->join('users', 'users.id_users = pelanggan.id_users');
        return $this->db->get('pelanggan')->result_array();
    }

    public function ambil_pelanggan_byid($id_pelanggan) {
        $this->db->join('users', 'users.id_users = pelanggan.id_users');
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get('pelanggan')->result_array();
    }

    public function ambil_id_pelanggan($id_users) {
    	$this->db->select('id_pelanggan');
    	$this->db->where('id_users', $id_users);
    	return $this->db->get('pelanggan')->row()->id_pelanggan;
    }

    public function ambil_password($id_users) {
        $this->db->where('id_users', $id_users);
        return $this->db->get('users')->row()->password;
    }

    public function ambil_nama_pelanggan($id_users) {
    	$this->db->select('nama_pelanggan');
    	$this->db->where('id_users', $id_users);
    	return $this->db->get('pelanggan')->row()->nama_pelanggan;
    }

    public function tambah_users($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function edit_users($id_users, $data) {
        $this->db->where('id_users', $id_users);
        $this->db->update('users', $data);
    }

    public function edit_pelanggan($id_pelanggan, $data) {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('pelanggan', $data);
    }

    public function tambah_pelanggan($data) {
        $this->db->insert('pelanggan', $data);
    }

    public function hapus_pelanggan($id_users) {
        $this->db->where('id_users', $id_users);
        $this->db->delete('users');
    }

    public function aktifkan_pelanggan($id_users) {
        $this->db->set('status', 1);
        $this->db->where('id_users', $id_users);
        $this->db->update('users');
    }
}