<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik_saran extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_kritik_saran');
	}

	public function index()
	{
		$data['daftar_kritik_saran'] = $this->m_kritik_saran->ambil_kritik_saran_pelanggan($this->session->userdata('id_pelanggan'));
		$this->load->view('pelanggan/daftar_kritik_saran', $data);
	}

	public function tambah_kritik_saran() {
		$this->load->view('pelanggan/tambah_kritik_saran');
	}

	public function tambah_kritik_saran_form() {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'waktu_kritik_saran' => date('Y-m-d H:i:s')
		);

		$this->m_kritik_saran->tambah_kritik_saran($data);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Kritik Saran berhasil dikirim!</div>');
		redirect('Kritik_saran');
	}

	public function respon_kritik_saran($id_kritik_saran) {
		$data['kritik_saran'] = $this->m_kritik_saran->ambil_kritik_saran_byid($id_kritik_saran);
		$this->load->view('pelanggan/respon_kritik_saran', $data);
	}

	public function ambil_respon_kritik_saran($id_kritik_saran, $id_respon) {
		echo json_encode($this->m_kritik_saran->ambil_respon_kritik_saran($id_kritik_saran, $id_respon));
	}

	public function tambah_respon_kritik_saran($id_kritik_saran, $respon) {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'id_kritik_saran' => $id_kritik_saran,
			'id_users' => $this->session->userdata('id_users'),
			'respon' => urldecode($respon),
			'waktu_respon' => date('Y-m-d H:i:s')
		);

		echo $this->m_kritik_saran->tambah_respon_kritik_saran($data);
	}
}
