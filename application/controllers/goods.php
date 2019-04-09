<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class goods extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function finished_good()
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules("stockTarget", "Select stock target", 'required');
			$this->form_validation->set_rules("Barcode", "valid barcode", 'required');
			$this->form_validation->set_rules("quantity", "Quantity", 'required');
			$this->form_validation->set_rules("unitPrice", "Unit Price", 'required');
			$this->form_validation->set_rules("total", "Total", 'required');


			if($this->form_validation->run()==FALSE)
			{

				$this->load->model("Model_Finished_goods");
				$data['finished_good'] = $this ->Model_Finished_goods->viewFinishedGoods();

				$this->load->view('sections/user/header');
				$this->load->view('sections/user/finished_good/enter_finished_good', $data);
				$this->load->view('sections/user/finished_good/footer');
			}
			else
			{
				$this->load->model('Model_Finished_goods');

				$data = array(

					'Stock_target' => $this->input->post('stockTarget'),
					'Barcode' => $this->input->post('Barcode'),
					'Quantity' => $this->input->post('quantity'),
					'Unit_Price' => $this->input->post('unitPrice'),
					'Total' => $this->input->post('total')
				);

					$this->Model_Finished_goods->createFinishedGoods($data);
					redirect(base_url() . "goods/finished_good");
					$this->finished_goods();
			}					
		}

	public function final_good()
		{

			$this->load->model("Model_final_goods");
			$data['final_good'] = $this ->Model_final_goods->viewFinalGood();
			
			$this->load->view('sections/user/header');
			$this->load->view('sections/user/view_final_good/view_final_good', $data);
			$this->load->view('sections/user/footer');
		}
    
}
