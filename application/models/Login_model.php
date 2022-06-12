<?php
class Login_model extends CI_Model
{
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query =$this->db->get();
		return $query;
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('user, hak_akses');
		$this->db->where('user.akses = hak_akses.id_akses');
		$query = $this->db->get();
		return $query;
	}

	function getGrup()
	{
		$this->db->select('*');
		$this->db->from('hak_akses');
		$query = $this->db->get();
		return $query;
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	
}
