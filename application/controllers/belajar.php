<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Belajar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		echo "ini method index pada controller belajar";
	}
	public function halo()
	{
		$data = array(
			'judul' => "cara membuat view pada ci",
			'tutorial' => "codeigniter"
		);
		$this->load->view('view_belajar', $data);
	}
}
