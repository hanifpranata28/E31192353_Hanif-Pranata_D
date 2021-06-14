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
		$data['mahasiswa'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/home_mahasiswa',$data);
	}
}

 ?>