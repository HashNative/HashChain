<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class stock extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

      // $this->load->database(); // load database
      // $this->load->model('Model_view_main_stock'); // load model 
		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function view_main_stock()
        {
            $this->load->view('sections/user/header');
            $this->load->view('sections/user/view_main_stock/main_stock');
              
                // $this->data['viewmainstock'] = $this->Model_view_main_stock->viewMainStock(); // calling Post model method getPosts()
                // $this->load->view('main_stock', $this->data); // load the view file , we are passing $data array to view file

            $this->load->view('sections/user/footer');
        }
    
}
