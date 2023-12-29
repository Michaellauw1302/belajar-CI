<?php
class Crud extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->helper('url');
	}
	function index()
	{
		$data['user'] = $this->crud_model->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}
	function input()
	{
		$this->load->view('v_input');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
		$this->crud_model->masukan_data('user', $data);
		redirect('crud/index');
	}
	function delete($id)
	{
		$where = array('id' => $id);
		$this->crud_model->delete_data('user', $where);
		redirect('crud/index');
	}
	function ambil_data_edit($id)
	{
		$dimana = array('id' => $id);
		$data['user'] = $this->crud_model->ambil_data($dimana, 'user')->result();
		$this->load->view('v_edit', $data);
	}

	function perbaharui()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data_update = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);

		$dimana = array(
			'id' => $id
		);

		$this->crud_model->perbaharui_data($dimana, $data_update, 'user');
		redirect('crud/index');
	}
}
