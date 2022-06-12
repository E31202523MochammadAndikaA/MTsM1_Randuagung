<?php
class Admin extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('lt');
	}

	function index()
	{
		$this->load->model('Data_model');
		$data['title2'] = 'Selamat Datang Administrator';
		$data['user'] = $this->Login_model->getAll()->result();
		$this->lt->views('MyAdmin/dashboard_admin', $data);
	}
	
	function login($user,$pass,$table){
		$this->db ->select('*');
		$this->db ->from('user');
		$this->db ->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this ->db->get();
		return $query;
	}

	public function tambah()
	{
		$this->lt->views('MyAdmin/tambah_admin');
	}

	public function input()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('akses');
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'akses' => $grup
		);
		$this->Login_model->input_data($data, 'user');
		redirect('Home/index');
	}



	public function edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->Login_model->edit_data($where, 'user')->result();
		$data['akses'] = $this->Login_model->getGrup()->result();
		$this->lt->views('crud/edit_mahasiswa', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
		$grup = $this->input->post('akses');

		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $pass,
			'akses' => $grup
		);

		$where = array(
			'id' => $id
		);

		$this->Login_model->update_data($where, $data, 'user');
		redirect('Admin');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Login_model->hapus_data($where, 'user');
		redirect('Admin');
	}

	

	
}
