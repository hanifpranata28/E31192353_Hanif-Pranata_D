<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/home_mahasiswa',$data);
	}

	public function tambah()
	{
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		redirect('Mahasiswa/index');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa',$data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);

		$where = array(
			'id' => $id
		);

		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		redirect('Mahasiswa');
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where,'tm_user');
		redirect('Mahasiswa/index');
	}
	public function Api()
	{
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}
	public function ApiInsert()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data,'tm_user');
		echo json_encode($array);
	}
	public function ApiDelete()
	{
		if ($this->input->post('username')) {
			$where = array('username' => $this->input->post('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
				$array = array('success' => true);
			}else {
				$array = array('error' => true);
			}
			echo json_encode($array);
		}
	}
	public function ApiUpdate()
	{
		$id = $this->post('id');
        $data = array(
                    'id'       => $this->post('id'),
                    'username' => $this->post('username'),
                    'password' => $this->post('password'),
                    'nama'          => $this->post('nama'),
                    'grup'    => $this->post('grup'));
        $this->db->where('id', $id);
        $update = $this->db->update_data('tm_user', $data);
        if ($update) {
            $this->response($data, 1);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
}

 ?>