<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transfer extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
	
		//page view
    public function transfer()
		{

				// $this->load->helper(array('form', 'url'));
				// $this->load->library('form_validation');

				$this->load->model('Model_transfer');
				$data['transfer_data'] = $this->Model_transfer->viewTransfer();

				$this->load->view('sections/user/header');
				$this->load->view('sections/user/transfer/transfer',$data);
				$this->load->view('sections/user/transfer/footer');
				$this->load->view('sections/user/footer');
				
		}   


		//create transfer
		public function createTransfer()
		{
						$this->form_validation->set_rules("Barcode", "Valid Barcode", 'required');
						$this->form_validation->set_rules("unitCost", "Select Unit Cost", 'required');
						$this->form_validation->set_rules("sections", "Select proper section", 'required');
						$this->form_validation->set_rules("quantity", "Quantity", 'required');
						$this->form_validation->set_rules("cost", "Cost", 'required');

				if($this->form_validation->run()==FALSE)
						{		
							$this->transfer();
						}
				else
						{
							$this->load->model('Model_transfer');
				
							$data['transfer_data'] =$this->Model_transfer->createTransfer();
							redirect(base_url() . "transfer/transfer");
							$this->transfer();
						}
		}

	//delete function

	public function deleteTransfer($id)
	{
		$this->load->model('Model_transfer');
		$this->Model_transfer->deleteTransfer($id);
		redirect(base_url() . "transfer/transfer");
		$this->transfer();
	}

	//edit to update data
	public function editTransfer($id)
	{
		$this->load->model('Model_transfer');
		$data['transfer_data'] = $this->Model_transfer->viewTransfer();
		$data['transferData'] = $this->Model_transfer->viewTransfer($id);

		$this->load->view('sections/user/header');
		$this->load->view('sections/user/transfer/update_transfer',$data);
		$this->load->view('sections/user/transfer/footer');
		$this->load->view('sections/user/footer');
	}

	//update edited data
	public function updateTransfer()
	{
		$this->load->model('Model_transfer');
		$this->Model_transfer->updateTransfer();
		redirect(base_url() . "transfer/transfer");
		$this->transfer();
	}

}
