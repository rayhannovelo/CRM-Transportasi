<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(2);
		$this->load->model('m_pelanggan');	
    }

	public function index()
	{
		$data['profil'] = $this->m_pelanggan->ambil_pelanggan_byid($this->session->userdata('id_pelanggan'));

		$this->load->view('pelanggan/profil', $data);
	}

	public function edit_profil() {
		$data['profil'] = $this->m_pelanggan->ambil_pelanggan_byid($this->session->userdata('id_pelanggan'));

		$this->load->view('pelanggan/edit_profil', $data);
	}

	public function edit_profil_form() {

		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->cek_password($this->input->post('password'))
		);

		$this->m_pelanggan->edit_users($this->session->userdata('id_users'), $data);

		$data = array(
			'nama_pelanggan' =>  $this->input->post('nama_pelanggan'),
			'no_telp' =>  $this->input->post('no_telp'),
			'fax' =>  $this->input->post('fax'),
			'email' =>  $this->input->post('email'),
			'alamat' =>  $this->input->post('alamat')
		);

		$this->m_pelanggan->edit_pelanggan($this->session->userdata('id_pelanggan'), $data);
		$this->session->set_userdata('nama_pelanggan', $this->input->post('nama'));
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Profil Berhasil Diperbarui!</div>');

		redirect('profil');
	}

	public function cek_password($password) {
		if($this->m_pelanggan->ambil_password($this->session->userdata('id_users')) == $password) {
			return $password;
		}else {
			return md5($password);
		}
	}
}
