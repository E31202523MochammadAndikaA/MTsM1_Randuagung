<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_model');
		$this->load->library('lt');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('url', 'form'); 
	}
    public function pengumuman_admin()
	{
		$data['pengumuman'] = $this->Pengumuman_model->getALlDataP();
		$this->lt->views('MyAdmin/pengumuman_admin', $data);
		
	}

	public function tambah()
    {
		$this->lt->views('MyAdmin/pengumuman/tambah');
	}


	public function proses_tambah()
    {
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

		$this->load->library('upload', $config);
        $this->upload->initialize($config);
		if ($this->upload->do_upload('userfile')){
            $this->Pengumuman_model->tambahdtp();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('Pengumuman/pengumuman_admin');
        }else{
           
            print_r($this->upload->display_errors());
            die;
        }
		
	}  

	public function detail($id)
	{
        if ($this->form_validation->run() == false) {
		$data['pengumuman'] = $this->db->get_where('pengumuman', ['judul' =>$this->session->userdata('judul')])->row_array();
		$data['inpo'] = $this->Pengumuman_model->getAllDataPById($id);
        $this->lt->views('MyAdmin/pengumuman/detail', $data);
        }
	}

	public function ubah($id)
	{
		
		$data['pengumuman'] = $this->db->get_where('pengumuman', ['judul' =>$this->session->userdata('judul')])->row_array();

		$data['admin'] = $this->Pengumuman_model->getPengumumanrById($id);

		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('tanggal_terbit', 'tanggal_terbit', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');


		if ( $this->form_validation->run() == FALSE ) {
			$this->lt->views('MyAdmin/pengumuman/ubah', $data);
		}else{
			$this->Pengumuman_model->ubahDataP();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
			redirect('Pengumuman/pengumuman_admin');
		}
	}

	public function hapus($id)
	{
		$this->Pengumuman_model->hapusDataP($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Hapus</div>');
		redirect('Pengumuman/pengumuman_admin');
	}
}
?>