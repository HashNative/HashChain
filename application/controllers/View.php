<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function viewmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_materials');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewpurchasedmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_purchased_materials');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewfinalgoods()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_final_goods');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewstaff()
	{

		$this->load->model('Model_staff');
		$data['staffArray'] = $this->Model_staff->return_staff();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/templates/side_navbar', $data);
		$this->load->view('sections/admin/templates/top_navbar', $data);
        $this->load->view('sections/admin/dashboard/view_staff', $data);
		$this->load->view('sections/admin/templates/footer', $data);
	}

	public function viewtransferedmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_transfered_materials');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewcashstock()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_cash_stock');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewmainstock()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_main_stock');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewcompanystock()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_company_stock');
		$this->load->view('sections/admin/templates/footer');
	}

	public function viewdetailedmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/view_detailed_materials');
		$this->load->view('sections/admin/templates/footer');
	}

	

	
    
}
