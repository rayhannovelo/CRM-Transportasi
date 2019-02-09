<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mobil extends CI_Model{

    public function ambil_mobil() {
        $this->db->join('jenis_mobil','jenis_mobil.id_jenis_mobil = mobil.id_jenis_mobil');
        return $this->db->get('mobil')->result_array();
    }

    public function ambil_mobil_bymerk() {
        $this->db->join('jenis_mobil','jenis_mobil.id_jenis_mobil = mobil.id_jenis_mobil');
        $this->db->group_by('merk, nama_jenis');
        return $this->db->get('mobil')->result_array();
    }

    public function ambil_mobil_byid($id_mobil) {
        $this->db->where('id_mobil', $id_mobil);
        return $this->db->get('mobil')->result_array();
    }

    public function ambil_mobil_byjenis($id_jenis_mobil) {
        $this->db->where('id_jenis_mobil', $id_jenis_mobil);
        return $this->db->get('mobil')->result_array();
    }

    public function ambil_mobil_byjenis_ready($id_jenis_mobil) {
        $this->db->where('id_jenis_mobil', $id_jenis_mobil);
        $this->db->where('status_mobil', 0);
        return $this->db->get('mobil')->result_array();
    }

    public function tambah_mobil($data) {
        $config['upload_path'] = "./assets/img/uploads/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|img|psd|tiff|wmf';
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("foto_mobil")) 
        {
            $upload = $this->upload->data();
            $data['foto_mobil'] = $upload['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $upload['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 280;
            $config['height']       = 210;
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $data['thumbnail_mobil'] = str_replace($upload['file_ext'], "_thumb" . $upload['file_ext'], $upload['file_name']);
        }

        $data = array(
            'id_jenis_mobil' => $data['id_jenis_mobil'],
            'plat_nomor' => $data['plat_nomor'],
            'merk' => $data['merk'],
            'warna' => $data['warna'],
            'tahun_pembuatan' => $data['tahun_pembuatan'],
            'foto_mobil' => $data['foto_mobil'],
            'thumbnail_mobil' => $data['thumbnail_mobil']
        ); 

        $this->db->insert('mobil', $data);
    }

    public function edit_mobil($data, $id_mobil) {
        $config['upload_path'] = "./assets/img/uploads/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|img|psd|tiff|wmf';
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("foto_mobil_baru")) 
        {
            $upload = $this->upload->data();
            $data['foto_mobil'] = $upload['file_name'];

            // create thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $config['upload_path'] . $upload['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 280;
            $config['height']       = 210;
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $data['thumbnail_mobil'] = str_replace($upload['file_ext'], "_thumb" . $upload['file_ext'], $upload['file_name']);

            if (file_exists("./assets/img/uploads/" . $data['foto_mobil_lama']))
                unlink("./assets/img/uploads/" . $data['foto_mobil_lama']);   
            if (file_exists("./assets/img/uploads/" . $data['thumbnail_mobil_lama'])) 
                    unlink("./assets/img/uploads/" . $data['thumbnail_mobil_lama']);

            echo 'aaa';
        }else{
            $data['foto_mobil'] = $data['foto_mobil_lama'];
            $data['thumbnail_mobil'] = $data['thumbnail_mobil_lama'];
            echo 'bbb';
        }

        $data = array(
            'id_jenis_mobil' => $data['id_jenis_mobil'],
            'plat_nomor' => $data['plat_nomor'],
            'merk' => $data['merk'],
            'warna' => $data['warna'],
            'tahun_pembuatan' => $data['tahun_pembuatan'],
            'foto_mobil' => $data['foto_mobil'],
            'thumbnail_mobil' => $data['thumbnail_mobil']
        ); 

        $this->db->where('id_mobil', $id_mobil);
        $this->db->update('mobil', $data);
    }

    public function ambil_jenis_mobil() {
        return $this->db->get('jenis_mobil')->result_array();
    }

    public function hapus_mobil($id_mobil) {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
        return $this->db->affected_rows();
    }
}