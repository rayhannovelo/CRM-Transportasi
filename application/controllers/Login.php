<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$valid->set_rules('username','Username','trim|required|xss_clean');
		$valid->set_rules('password','Password','trim|required|xss_clean');
		$valid->set_rules('level','Level','trim|required|xss_clean');
		if($valid->run()) {
			$this->simple_login->login($username,$password,$level);
		}
		$this->load->view('login/login');
	}
	
	public function logout() {
		$this->simple_login->logout();	
	}

	public function register() {
		$this->load->model('m_pelanggan');

		$data = array(
			'username' =>  $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => 2,
			'status' => 0
		);

		$id_users = $this->m_pelanggan->tambah_users($data);

		$data = array(
			'id_users' =>  $id_users,
			'nama_pelanggan' =>  $this->input->post('nama_pelanggan'),
			'no_telp' =>  $this->input->post('no_telp'),
			'fax' =>  $this->input->post('fax'),
			'email' =>  $this->input->post('email'),
			'alamat' =>  $this->input->post('alamat')
		);

		$this->m_pelanggan->tambah_pelanggan($data);

		$this->session->set_flashdata('sukses','<div class="alert alert-success text-center">Selamat, Anda berhasil melakukan registrasi!</div>');
		redirect('login');
	}
}	