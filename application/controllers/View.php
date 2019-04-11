<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}
	public function viewpurchasedmaterials()
	{
		$this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/view_purchased_materials');
		$this->load->view('sections/admin/templates/footer');
	}
}
