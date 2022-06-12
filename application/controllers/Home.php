<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }
	
	public function index(){
        $data['pengumuman'] = $this->Data_model->getALlDataP();
		$this->load->view('templates/header');
        $this->load->view('Halaman/home', $data);
        $this->load->view('templates/footer');
	}

    public function pengumuman()
    {
        $data['pengumuman'] = $this->Data_model->getALlDataP();
        $data['pengumuman'] = $this->Data_model->getAllDataP();
        if( $this->input->post('keyword') ) {
            $data['pengumuman'] = $this->Data_model->pencarian();
        }
		$this->load->view('templates/header');
        $this->load->view('Halaman/pengumuman', $data);
        $this->load->view('templates/footer');
	}

    public function tentang(){
		$this->load->view('templates/header');
        $this->load->view('Halaman/tentang');
        $this->load->view('templates/footer');
	}

    public function galery(){
		$this->load->view('templates/header');
        $this->load->view('Halaman/galery_siswa');
        $this->load->view('templates/footer');
	}

    public function detail_pengumuman($id)
    {
        $data['pengumuman'] = $this->Data_model->getAllDataPById($id);
		$this->load->view('templates/header');
        $this->load->view('Halaman/detail_pengumuman', $data);
        $this->load->view('templates/footer');
	}

    
}
