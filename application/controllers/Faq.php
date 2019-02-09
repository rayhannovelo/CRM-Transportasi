<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_faq');
	}

	public function index()
	{
		$data['daftar_faq'] = $this->m_faq->ambil_faq();
		$this->load->view('pelanggan/daftar_faq', $data);
	}
}
