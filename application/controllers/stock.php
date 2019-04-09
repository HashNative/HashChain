<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class stock extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function view_main_stock()
        {
            $this->load->model("Model_main_stock");
            $data['main_stock'] = $this ->Model_main_stock->viewMainStock();

            $this->load->view('sections/user/header');
            $this->load->view('sections/user/view_main_stock/main_stock', $data);
            $this->load->view('sections/user/footer');
        }
    
}
