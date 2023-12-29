<?php
defined('BASEPATH') or exit('No direct script access allowed');
class controllerPagination extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}

	function index()
	{
		$this->load->database();
		$jumlah_data = $this->m_data->total_record();
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'index.php/controllerPagination/index/';
		$config['total_baris'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['user'] = $this->m_data->data($config['per_page'], $from);
		$this->load->view('v_pagination', $data);
	}
}
