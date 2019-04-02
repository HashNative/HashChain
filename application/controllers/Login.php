<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function userlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/user/login/login');
		$this->load->view('templates/footer');
	}

	public function adminlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/admin/login/login');
		$this->load->view('templates/footer');
	}

	public function superadminlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/superadmin/login/login');
		$this->load->view('templates/footer');
	}
}
