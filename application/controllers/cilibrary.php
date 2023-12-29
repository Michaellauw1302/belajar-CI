<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cilibrary extends CI_Controller
{
	function index()
	{
		$this->load->library('nama');
		$this->nama->nama_saya();
		echo "<br/>";
		$this->nama->nama_kamu("christopher micheal lauw");
	}
}
