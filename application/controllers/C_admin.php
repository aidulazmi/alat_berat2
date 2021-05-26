<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login/V_login');
	}
	
	public function dashboard()
	{
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/inc/footer');
	}

}
