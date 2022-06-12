<?php 

class Data_model extends CI_model {
    public function getAllDataP()//getAllMahasiswa
    {
        return $this->db->get('pengumuman')->result_array();
    }

    public function getAllDataPById($id)
    {
        return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
    }

    public function pencarian()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('tanggal_terbit', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get('pengumuman')->result_array();
    }

    
}