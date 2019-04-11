<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends Admin_Controller 
{

	public function __construct()
	{
	
	}
        
    // public function finished_good(){
	// 		$this->load->helper(array('form', 'url'));

	// 		$this->load->library('form_validation');

	// 		$this->form_validation->set_rules("stockTarget", "Select stock target", 'required');
	// 		$this->form_validation->set_rules("Barcode", "valid barcode", 'required');
	// 		$this->form_validation->set_rules("quantity", "Quantity", 'required');
	// 		$this->form_validation->set_rules("unitPrice", "Unit Price", 'required');
	// 		$this->form_validation->set_rules("total", "Total", 'required');


	// 		if($this->form_validation->run()==FALSE)
	// 		{

	// 			$this->load->model("Model_Finished_goods");
	// 			$data['finished_good'] = $this ->Model_Finished_goods->viewFinishedGoods();

	// 			$this->load->view('sections/user/header');
	// 			$this->load->view('sections/user/finished_good/enter_finished_good', $data);
	// 			$this->load->view('sections/user/footer');
	// 		}
	// 		else
	// 		{
	// 			$this->load->model('Model_Finished_goods');

	// 			$data = array(

	// 				'Stock_target' => $this->input->post('stockTarget'),
	// 				'Barcode' => $this->input->post('Barcode'),
	// 				'Quantity' => $this->input->post('quantity'),
	// 				'Unit_Price' => $this->input->post('unitPrice'),
	// 				'Total' => $this->input->post('total')
	// 			);

	// 				$this->Model_Finished_goods->createFinishedGoods($data);
	// 				redirect(base_url() . "Goods/finished_good");
	// 				$this->finished_goods();
	// 		}					
	// }

	// public function final_good()
	// 	{

	// 		$this->load->model("Model_final_goods");
	// 		$data['final_good'] = $this ->Model_final_goods->viewFinalGood();
			
	// 		$this->load->view('sections/user/header');
	// 		$this->load->view('sections/user/view_final_good/view_final_good', $data);
	// 		$this->load->view('sections/user/footer');
	// 	}

	public function final_good()
	{
		$this->load->model('Model_final_goods');
		$data['finalGoods'] = $this->Model_final_goods->index();

		$this->load->view('sections/user/header');
		$this->load->view('sections/user/view_final_good/view_final_good', $data);
		$this->load->view('sections/user/footer');
    }

	public function addFinalGoods()
	{
		$this->form_validation->set_rules("name", "Product Name", 'required');
        $this->form_validation->set_rules("quantity", "Quantity", 'required');
        $this->form_validation->set_rules("barcode", "Barcode", 'required');

		if (!$this->form_validation->run()) {
			$this->final_good();
		} else {
			$this->load->model('Model_final_goods');
			$this->Model_final_goods->saveFinalGood();
			$this->final_good();
		}
	}

	public function deleteFinalGoods($id)
	{
		$this->load->model('Model_final_goods');
		$this->Model_final_goods->deleteFinalGood($id);
		$this->final_good();
	}

	public function editFinalGoods($id)
	{
		$this->load->model('Model_final_goods');
		$data['finalGood'] = $this->Model_final_goods->index($id);
		$data['finalGoods'] = $this->Model_final_goods->index();

		$this->load->view('sections/user/header');
		$this->load->view('sections/user/final_good/update_finalGoods', $data);
		$this->load->view('sections/user/footer');
	}

	public function updateFinalGoods()
	{
		$this->load->model('Model_final_goods');
		$this->Model_final_goods->updateFinalGood();
		$this->final_good();
	}
    
}
