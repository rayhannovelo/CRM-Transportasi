<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_pelanggan');
		$this->load->model('m_transaksi');
		$this->load->model('m_mobil');
	}

	public function index()
	{
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_daftar_transaksi();
		$this->load->view('admin/daftar_transaksi', $data);
	}

	public function konfirmasi_transaksi($id_transaksi, $id_jenis_mobil) {
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['daftar_barang'] = $this->m_transaksi->ambil_daftar_barang($id_transaksi);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$data['daftar_mobil'] = $this->m_mobil->ambil_mobil_byjenis_ready($id_jenis_mobil);
		$this->load->view('admin/konfirmasi_transaksi', $data);
	}

	public function konfirmasi_transaksi_form() {
		date_default_timezone_set('Asia/Jakarta');
      
		$data = array (
			'id_mobil' => $this->input->post('id_mobil'),
			'tanggal_konfirmasi' => date('Y-m-d H:i:s'),
			'biaya' => $this->input->post('biaya'),
			'status' => 1
		);
		$this->m_transaksi->konfirmasi_transaksi($data, $this->input->post('id_transaksi'), $this->input->post('id_mobil'));

		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data transaksi berhasil dikonfirmasi!</div>');

		redirect('daftar_transaksi');
	}

	public function detail_transaksi($id_transaksi, $id_jenis_mobil) {
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['daftar_barang'] = $this->m_transaksi->ambil_daftar_barang($id_transaksi);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$data['daftar_mobil'] = $this->m_mobil->ambil_mobil_byjenis($id_jenis_mobil);
		$this->load->view('admin/detail_transaksi', $data);
	}

	public function selesai($id_transaksi) {
		$this->m_transaksi->transaksi_selesai($id_transaksi);
		redirect('daftar_transaksi');
	}
}
