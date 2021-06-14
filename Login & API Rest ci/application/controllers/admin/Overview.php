<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/_Template/template");
        $this->load->view("admin/_Template/content");
        $this->load->view("admin/_Template/head");
        $this->load->view("admin/_Template/topbar");
        $this->load->view("admin/_Template/sidebar");
        $this->load->view("admin/_Template/footer");
	}
}