<?php
class Transfers extends CI_Controller
{

	public function viewTransfers()
	{
		$data['pageTitle'] = "Transfers Report";

		$this->load->model('Transfer_model');
		$data['transfers'] = $this->Transfer_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/transfers/report_transfers', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function addTransfers()
	{

		$this->form_validation->set_rules("barcode", "Barcode", 'required');
		$this->form_validation->set_rules("unitPrice", "Unit Price", 'required');
		$this->form_validation->set_rules("quantity", "Quantity", 'required');

		if (!$this->form_validation->run()) {
			$this->load->view('sections/admin/templates/header');
			$this->load->view('sections/admin/dashboard/transfers/add_transfers');
			$this->load->view('sections/admin/templates/footer');
		} else {
			$this->load->model('Transfer_model');
			$this->Transfer_model->saveTransfers();
			$this->viewTransfers();
		}
	}

	public function deleteTransfers($id)
	{
		$this->load->model('Transfer_model');
		$this->Transfer_model->deleteTransfers($id);
		$this->viewTransfers();
	}

	public function editTransfers($id)
	{

		$data['pageTitle'] = "Edit Transfers";

		$this->load->model('Transfer_model');
		$data['transfer'] = $this->Transfer_model->index($id);

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/transfers/update_transfers', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function updateTransfers()
	{
		$this->load->model('Transfer_model');
		$this->Transfer_model->updateTransfers();
		$this->viewTransfers();
	}
}
