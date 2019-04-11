<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function admindashboard()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/dashboard/admin_dashboard');
		$this->load->view('sections/admin/templates/footer');
	}

	public function superadmindashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/superadmin/dashboard/superadmin_dashboard');
		$this->load->view('templates/footer');
	}

	  
    public function userdashboard()
	{
		$this->load->view('sections/user/header');
        $this->load->view('sections/user/dashboard/user_dashboard');
		$this->load->view('sections/user/footer');
	}
}
