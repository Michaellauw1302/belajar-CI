<?php
class Crud_model extends CI_Model
{
	function tampil_data()
	{
		return $this->db->get('user');
	}
	function masukan_data($data, $table)
	{
		$this->db->insert($data, $table);
	}
	function delete_data($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ambil_data($dimana, $table)
	{
		return $this->db->get_where($table, $dimana);
	}
	function perbaharui_data($dimana, $data_update, $table)
	{
		$this->db->where($dimana);
		$this->db->update($table, $data_update);
	}
}
