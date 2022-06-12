<?php 

class User_model extends CI_model {
    public function getAllDataU()//getAllMahasiswa
    {
        return $this->db->get('user')->result_array();
    }

    public function getAllDataUById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function hapusDataU($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('user', ['id' => $id]);
	}

	public function getAdministratorById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function ubahDataU()
	{
		$data = [
			"username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
			"nama" => $this->input->post('nama', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}
	public function tambahDataU()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "nama" => $this->input->post('nama', true),
			"akses" => 1,
        ];

        $this->db->insert('user', $data);
    }
}