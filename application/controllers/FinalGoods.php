<?php
class FinalGoods extends CI_Controller
{
	public function viewFinalGoods()
	{
		$data['pageTitle'] = "Final Goods";
		
		$this->load->model('FinalGood_model');
		$data['finalGoods'] = $this->FinalGood_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/finalgoods/index_finalGoods', $data);
		$this->load->view('sections/admin/templates/footer');
    }

	public function addFinalGoods()
	{
		$this->form_validation->set_rules("name", "Product Name", 'required');
        $this->form_validation->set_rules("quantity", "Quantity", 'required');
        $this->form_validation->set_rules("barcode", "Barcode", 'required');

		if (!$this->form_validation->run()) {
			$this->viewFinalGoods();
		} else {
			$this->load->model('FinalGood_model');
			$this->FinalGood_model->saveFinalGood();
			$this->viewFinalGoods();
		}
	}

	public function deleteFinalGoods($id)
	{
		$this->load->model('FinalGood_model');
		$this->FinalGood_model->deleteFinalGood($id);
		$this->viewFinalGoods();
	}

	public function editFinalGoods($id)
	{
		$data['pageTitle'] = "Edit Final Goods";

		$this->load->model('FinalGood_model');
		$data['finalGood'] = $this->FinalGood_model->index($id);
		$data['finalGoods'] = $this->FinalGood_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
		$this->load->view('sections/admin/dashboard/finalgoods/update_finalGoods', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function updateFinalGoods()
	{
		$this->load->model('FinalGood_model');
		$this->FinalGood_model->updateFinalGood();
		$this->viewFinalGoods();
	}
}
