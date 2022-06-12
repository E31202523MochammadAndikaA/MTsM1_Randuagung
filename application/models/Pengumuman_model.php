<?php 

class Pengumuman_model extends CI_model {
    public function getAllDataP()//getAllMahasiswa
    {
        return $this->db->get('pengumuman')->result_array();
    }

    public function getAllDataPById($id)
    {
        return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
    }

    public function tambahDataP()
    {
        $data = [
            "gambar" => $this->input->post('gambar', true),
            "judul" => $this->input->post('judul', true),
            "tanggal_terbit" => date,
			"isi" => $this->input->post('isi', true),
        ];

        $this->db->insert('pengumuman', $data);
    }

    public function tambahdtp(){
        $gambar 		= $this->upload->data();
        $gambar 		= $gambar['file_name'];
        $judul 		    = $this->input->post('judul', TRUE);
        $tanggal_terbit = $this->input->post('tanggal_terbit', TRUE);
        $isi 	        = $this->input->post('isi', TRUE);

        $data = array(
            'gambar' => $gambar,
            'judul' => $judul,
            'tanggal_terbit' => $tanggal_terbit,
            'isi' => $isi,
        );
        $this->db->insert('pengumuman', $data);
    }

    public function getGaleri($gambar){
		return $this->db->get_where('pengumuman', ['gambar' => $gambar])->row_array();
	}
    public function hapusDataP($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('pengumuman', ['id' => $id]);
	}

    public function ubahDataP()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
            "tanggal_terbit" => $this->input->post('tanggal_terbit', true),
			"isi" => $this->input->post('isi', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pengumuman', $data);
	}

    public function getPengumumanrById($id)
	{
		return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
	}

}