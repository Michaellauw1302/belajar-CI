<?php
class M_pagination extends CI_Model
{
	function getAllData($number, $offset)
	{
		return $query = $this->db->get('user', $number, $offset)->result();
	}
	function total_record()
	{
		return $this->db->get('user')->num_rows();
	}
}
