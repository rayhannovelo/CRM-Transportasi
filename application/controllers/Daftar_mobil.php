<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_mobil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
        // $this->simple_login->cek_login(2);
        $this->load->model('m_mobil');
	}

	public function index()
	{
		$data['daftar_mobil'] = $this->m_mobil->ambil_mobil();

		if($this->simple_login->login_super(1,2) == 1) {
			$this->load->view('admin/daftar_mobil',$data);
		}else{
			$data['daftar_mobil'] = $this->m_mobil->ambil_mobil_bymerk();
			$this->load->view('pelanggan/daftar_mobil',$data);
		}
	}

	public function tambah_mobil() {
		$this->simple_login->cek_login(1);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$this->load->view('admin/tambah_mobil',$data);
	}

	public function tambah_mobil_form() {
		$this->simple_login->cek_login(1);
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'id_jenis_mobil' => $this->input->post('id_jenis_mobil'),
			'plat_nomor' => $this->input->post('plat_nomor'),
			'merk' => $this->input->post('merk'),
			'warna' => $this->input->post('warna'),
			'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
			'foto_mobil' => $this->input->post('foto_mobil')
		); 

		$this->m_mobil->tambah_mobil($data);
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Mobil berhasil ditambah!</div>');
		redirect('daftar_mobil');
	}

	public function edit_mobil($id_mobil) {
		$data['mobil'] = $this->m_mobil->ambil_mobil_byid($id_mobil);
		$data['daftar_jenis_mobil'] = $this->m_mobil->ambil_jenis_mobil();
		$this->load->view('admin/edit_mobil', $data);
	}

	public function edit_mobil_form() {
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'id_jenis_mobil' => $this->input->post('id_jenis_mobil'),
			'plat_nomor' => $this->input->post('plat_nomor'),
			'merk' => $this->input->post('merk'),
			'warna' => $this->input->post('warna'),
			'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
			'foto_mobil_lama' => $this->input->post('foto_mobil'),
			'thumbnail_mobil_lama' => $this->input->post('thumbnail_mobil'),
			'foto_mobil_baru' => $this->input->post('foto_mobil_baru')
		);  
		
		$this->m_mobil->edit_mobil($data, $this->input->post('id_mobil'));
		$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data mobil berhasil diedit!</div>');
		redirect('daftar_mobil');
	}

	public function hapus_mobil($id_mobil, $foto_mobil, $thumbnail_mobil) {
		$this->simple_login->cek_login(1);
		if($this->m_mobil->hapus_mobil($id_mobil) == 0) {
			$this->session->set_flashdata('hasil','<div class="alert alert-danger alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Mobil gagal dihapus!</div>');
		}else{
			$this->session->set_flashdata('hasil','<div class="alert alert-success alert-dismissable text-center"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Data Mobil berhasil dihapus!</div>');

			if (file_exists("./assets/img/uploads/" . $foto_mobil))
                unlink("./assets/img/uploads/" . $foto_mobil);   
            if (file_exists("./assets/img/uploads/" . $thumbnail_mobil)) 
                    unlink("./assets/img/uploads/" . $thumbnail_mobil);
		}
		redirect('daftar_mobil');
	}
}