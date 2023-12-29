<?php

class M_data extends CI_Model
{
	function data($number, $offset)
	{
		return $query = $this->db->get('user', $number, $offset)->result();
	}
	function total_record()
	{
		return $this->db->get('user')->num_rows();
	}
}
