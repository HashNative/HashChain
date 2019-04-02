<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function changepassword()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/update_password');
		$this->load->view('sections/admin/templates/footer');
	}
    
}
