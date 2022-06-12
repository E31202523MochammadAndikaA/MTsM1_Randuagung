<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('lt');
        $this->load->library('form_validation');
	}
    public function user_admin()
	{
		$data['user'] = $this->User_model->getALlDataU();
		$this->lt->views('MyAdmin/account_admin', $data);
	}
    public function detail($id)
	{
        if ($this->form_validation->run() == false) {
		$data['user'] = $this->db->get_where('user', ['username' =>$this->session->userdata('username')])->row_array();
		$data['administrator'] = $this->User_model->getAllDataUById($id);
        $this->lt->views('MyAdmin/user/detail', $data);
        }
	}

    public function ubah($id)
	{
		
		$data['user'] = $this->db->get_where('user', ['username' =>$this->session->userdata('username')])->row_array();

		$data['admin'] = $this->User_model->getAdministratorById($id);

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');


		if ( $this->form_validation->run() == FALSE ) {
			$this->lt->views('MyAdmin/user/ubah', $data);
		}else{
			$this->User_model->ubahDataU();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
			redirect('User/user_admin');
		}
	}

	public function hapus($id)
	{
		$this->User_model->hapusDataU($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Hapus</div>');
		redirect('User/user_admin');
	}

	public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

		$this->session->set_flashdata('flash', 'tambah');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Tambah</div>');

        if ($this->form_validation->run() == false) {
            $this->lt->views('MyAdmin/user/tambah', $data);
        } else {
            $this->User_model->tambahDataU();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('User/user_admin');
        }
    }

}
?>