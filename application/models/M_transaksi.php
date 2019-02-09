<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model{

    public function ambil_daftar_transaksi() {
    	$this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil', 'left outer');
    	$this->db->join('jenis_mobil', 'jenis_mobil.id_jenis_mobil = transaksi.id_jenis_mobil');
        return $this->db->get('transaksi')->result_array();
    }

    public function ambil_transaksi_pelanggan($id_pelanggan) {
    	$this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil', 'left outer');
    	$this->db->join('jenis_mobil', 'jenis_mobil.id_jenis_mobil = transaksi.id_jenis_mobil');
    	$this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get('transaksi')->result_array();
    }

    public function ambil_transaksi_byid($id_transaksi) {
    	$this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil', 'left outer');
    	$this->db->join('jenis_mobil', 'jenis_mobil.id_jenis_mobil = transaksi.id_jenis_mobil');
    	$this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get('transaksi')->result_array();
    }

    public function tambah_transaksi($data) {
    	$this->db->insert('transaksi', $data);
        return $this->db->insert_id();
    }

    public function edit_transaksi($data, $id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
    }

    public function hapus_transaksi($id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('transaksi');
        return $this->db->affected_rows();
    }

    public function konfirmasi_transaksi($data, $id_transaksi, $id_mobil) {
    	$this->db->where('id_transaksi', $id_transaksi);
    	$this->db->update('transaksi', $data);

        $this->db->set('status_mobil', 1);
        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil');
    }

    public function ambil_daftar_barang($id_transaksi) {
    	$this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get('daftar_barang_transaksi')->result_array();
    }

    public function tambah_daftar_barang_transaksi($data) {
    	$this->db->insert('daftar_barang_transaksi', $data);
    }

    public function edit_daftar_barang_transaksi($data, $id_daftar_barang) {
        $this->db->where('id_daftar_barang', $id_daftar_barang);
        $this->db->update('daftar_barang_transaksi', $data);
    }

    public function hapus_barang_transaksi($id_daftar_barang) {
        $this->db->where('id_daftar_barang', $id_daftar_barang);
        $this->db->delete('daftar_barang_transaksi');
    }

    public function cek_daftar_barang($id_daftar_barang) {
        $this->db->where('id_daftar_barang', $id_daftar_barang);
        return $this->db->get('daftar_barang_transaksi')->num_rows();
    }

    public function transaksi_selesai($id_transaksi) {
        $this->db->set('status', 2);
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi');

        $this->db->set('status_mobil', 0);
        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil');
    }
}