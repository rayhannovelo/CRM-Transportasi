<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_faq extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_faq');
	}

	public function index()
	{
		$data['daftar_faq'] = $this->m_faq->ambil_faq();
		$this->load->view('admin/daftar_faq', $data);
	}

	public function tambah_faq() {
		$this->load->view('admin/tambah_faq');
	}

	public function tambah_faq_form() {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'jawaban' => $this->input->post('jawaban'),
			'waktu_ditambahkan' => date('Y-m-d H:i:s')
		); 

		$this->m_faq->tambah_faq($data);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data FAQ berhasil ditambah!</div>');
		redirect('daftar_faq');
	}

	public function edit_faq($id_faq) {
		$data['faq'] = $this->m_faq->ambil_faq_byid($id_faq);
		$this->load->view('admin/edit_faq', $data);
	}

	public function edit_faq_form() {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'jawaban' => $this->input->post('jawaban'),
			'waktu_ditambahkan' => date('Y-m-d H:i:s')
		); 

		$this->m_faq->edit_faq($data, $this->input->post('id_faq'));
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data FAQ berhasil diedit!</div>');
		redirect('daftar_faq');
	}

	public function hapus_faq($id_faq) {
		$this->m_faq->hapus_faq($id_faq);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data FAQ berhasil dihapus!</div>');
		redirect('daftar_faq');
	}
}
