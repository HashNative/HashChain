<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Add extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function addsections()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/add_sections');
		$this->load->view('sections/admin/templates/footer');
	}

	public function addfinalgoods()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/add_final_goods');
		$this->load->view('sections/admin/templates/footer');
	}

	public function addmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/add_materials');
		$this->load->view('sections/admin/templates/footer');
	}

	public function addstaff()
	{
		$this->load->model('Model_staff');
		$data['addStaff'] = $this->Model_staff->add_staff();

		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/add_staff');
		$this->load->view('sections/admin/templates/footer');
	}

	public function addmainstockmaterials()
	{
		$this->load->view('sections/admin/templates/header');
		$this->load->view('sections/admin/templates/side_navbar');
		$this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/add_main_stock_materials');
		$this->load->view('sections/admin/templates/footer');
	}




	// form validation
	public function addworkersvalidation()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules("name", "Name", 'required|alpha');
        
        if($this->form_validation->run()) {
            $this->load->model('addworkers');
        } else {
            $this->addworkers();
        }
	}
	public function addsectionsvalidation()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules("section", "Section", 'required|alpha');
        
        if($this->form_validation->run()) {
            $this->load->model('addsections');
        } else {
            $this->addsections();
        }
	}
	public function addfinalgoodsvalidation()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules("name", "Product Name", 'required|alpha');
        $this->form_validation->set_rules("quantity", "Quantity", 'required|alpha');
        $this->form_validation->set_rules("barcode", "Barcode", 'required|numeric');
        
        if($this->form_validation->run()) {
            $this->load->model('addfinalgoodsvalidation');
        } else {
            $this->addfinalgoods();
        }
	}
	public function addmaterialsvalidation()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules("barcode", "Barcode", 'required|numeric');
        $this->form_validation->set_rules("name", "Name", 'required|alpha');
        
        if($this->form_validation->run()) {
            $this->load->model('addmaterials');
        } else {
            $this->addmaterials();
        }
	}
	public function addmainstockmaterialsvalidation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("orderno", "Purchase Order Number", 'required|numeric');
		$this->form_validation->set_rules("barcode", "Barcode", 'required|numeric');
        $this->form_validation->set_rules("name", "Material Name", 'required|alpha');
        $this->form_validation->set_rules("type", "Material Type", 'required|alpha');
        $this->form_validation->set_rules("quantity", "Quantity", 'required|numeric');
        $this->form_validation->set_rules("unitprice", "Unit Price", 'required|numeric');
        $this->form_validation->set_rules("total", "Total", 'required|numeric');
        
        if($this->form_validation->run()) {
            $this->load->model('addmainstockmaterials');
        } else {
            $this->addmainstockmaterials();
        }
	}
	
}
