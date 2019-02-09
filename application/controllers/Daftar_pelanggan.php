<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pelanggan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_pelanggan');
	}

	public function index()
	{
		$data['daftar_pelanggan'] = $this->m_pelanggan->ambil_pelanggan();
		$this->load->view('admin/daftar_pelanggan', $data);
	}

	public function hapus_pelanggan($id_users) {
		$this->m_pelanggan->hapus_pelanggan($id_users);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data pelanggan berhasil dihapus!</div>');
		redirect('daftar_pelanggan');
	}

	public function aktifkan_pelanggan($id_users) {
		$this->m_pelanggan->aktifkan_pelanggan($id_users);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Akun pelanggan berhasil diaktifkan!</div>');
		redirect('daftar_pelanggan');
	}
}
