<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_transaksi');
		$this->load->model('m_mobil');
	}

	public function index()
	{
		$data['daftar_transaksi'] = $this->m_transaksi->ambil_transaksi_pelanggan($this->session->userdata('id_pelanggan'));
		$this->load->view('pelanggan/daftar_transaksi', $data);
	}

	public function tambah_transaksi() {
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$this->load->view('pelanggan/tambah_transaksi', $data);
	}

	public function tambah_transaksi_2($id_jenis_mobil) {
		$data['id_jenis_mobil'] = $id_jenis_mobil;
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$this->load->view('pelanggan/tambah_transaksi', $data);
	}

	public function tambah_transaksi_form() {
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_mobil' => NULL, // akan diisi oleh admin
			'id_jenis_mobil' => $this->input->post('id_jenis_mobil'),
			'lokasi_tujuan' => $this->input->post('lokasi_tujuan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'tanggal_pengiriman' => $this->input->post('tanggal_pengiriman'),
			'tanggal_konfirmasi' => 0,
			'biaya' => 0,
			'status' => 0
		);
		$id_transaksi = $this->m_transaksi->tambah_transaksi($data);

		foreach($this->input->post('nama_barang[]') as $key1 => $nama_barang) {
			foreach($this->input->post('keterangan[]') as $key2 => $keterangan) {
				foreach($this->input->post('kuantitas[]') as $key3 => $kuantitas) {
					if($key1 == $key2 && $key2 == $key3 && $key1 == $key3) {
						$data = array(
							'id_transaksi' => $id_transaksi,
							'nama_barang' => $nama_barang,
							'keterangan' => $keterangan,
							'kuantitas' => $kuantitas
						);
						$this->m_transaksi->tambah_daftar_barang_transaksi($data);
						break 2;
					}
				}
			}
		}

		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Transaksi berhasil ditambah!</div>');
		redirect('transaksi');
	}

	public function edit_transaksi($id_transaksi) {
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['daftar_barang'] = $this->m_transaksi->ambil_daftar_barang($id_transaksi);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$this->load->view('pelanggan/edit_transaksi', $data);
	}

	public function edit_transaksi_form() {
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_mobil' => NULL, // akan diisi oleh admin
			'id_jenis_mobil' => $this->input->post('id_jenis_mobil'),
			'lokasi_tujuan' => $this->input->post('lokasi_tujuan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'tanggal_pengiriman' => $this->input->post('tanggal_pengiriman'),
			'tanggal_konfirmasi' => 0,
			'biaya' => 0,
			'status' => 0
		);
		$this->m_transaksi->edit_transaksi($data, $this->input->post('id_transaksi'));

		foreach($this->input->post('nama_barang[]') as $key1 => $nama_barang) {
			foreach($this->input->post('keterangan[]') as $key2 => $keterangan) {
				foreach($this->input->post('kuantitas[]') as $key3 => $kuantitas) {
					foreach($this->input->post('id_daftar_barang[]') as $key4 => $id_daftar_barang) {
						if($key1 == $key2 && $key2 == $key3 && $key3 == $key4){
							if($this->m_transaksi->cek_daftar_barang($id_daftar_barang) > 0) {
								$data = array(
									'id_transaksi' => $this->input->post('id_transaksi'),
									'nama_barang' => $nama_barang,
									'keterangan' => $keterangan,
									'kuantitas' => $kuantitas
								);
								$this->m_transaksi->edit_daftar_barang_transaksi($data, $id_daftar_barang);
								break 3;
							}else{
								$data = array(
									'id_transaksi' => $this->input->post('id_transaksi'),
									'nama_barang' => $nama_barang,
									'keterangan' => $keterangan,
									'kuantitas' => $kuantitas
								);
								$this->m_transaksi->tambah_daftar_barang_transaksi($data);
								break 3;
							}
						}
					}
				}
			}
		}

		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Transaksi berhasil diedit!</div>');
		redirect('transaksi');
	}

	public function hapus_transaksi($id_transaksi) {
		if($this->m_transaksi->hapus_transaksi($id_transaksi) == 0){
			$this->session->set_flashdata('hasil','<div class="alert alert-danger alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Transaksi gagal dihapus!</div>');
		}else{
			$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Transaksi berhasil dihapus!</div>');
		}
		
		redirect('transaksi');
	}

	public function detail_transaksi($id_transaksi, $id_jenis_mobil) {
		$data['transaksi'] = $this->m_transaksi->ambil_transaksi_byid($id_transaksi);
		$data['daftar_barang'] = $this->m_transaksi->ambil_daftar_barang($id_transaksi);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$data['daftar_mobil'] = $this->m_mobil->ambil_mobil_byjenis($id_jenis_mobil);
		$this->load->view('pelanggan/detail_transaksi', $data);
	}

	public function hapus_barang_transaksi($id_daftar_barang, $id_transaksi) {
		$this->m_transaksi->hapus_barang_transaksi($id_daftar_barang);
		redirect('transaksi/edit_transaksi/'.$id_transaksi);
	}
}
