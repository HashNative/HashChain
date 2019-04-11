<?php
class Materials extends CI_Controller
{

	public function viewMaterials()
	{
		$data['pageTitle'] = "Materials";

		$this->load->model('Material_model');
		$data['materials'] = $this->Material_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/materials/index_materials', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function addMaterials()
	{
		$this->form_validation->set_rules("barcode", "Barcode", 'required');
		$this->form_validation->set_rules("name", "Name", 'required');
		$this->form_validation->set_rules("type", "Type", 'required');
		$this->form_validation->set_rules("unit", "Unit", 'required');

		if (!$this->form_validation->run()) {
			$this->viewMaterials();
		} else {
			$this->load->model('Material_model');
			$this->Material_model->saveMaterial();
			$this->viewMaterials();
		}
	}

	public function deleteMaterials($id)
	{
		$this->load->model('Material_model');
		$this->Material_model->deleteMaterial($id);
		$this->viewMaterials();
	}

	public function editMaterials($id)
	{
		$data['pageTitle'] = "Edit Materials";

		$this->load->model('Material_model');
		$data['material'] = $this->Material_model->index($id);
		$data['materials'] = $this->Material_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/materials/update_materials', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function updateMaterials()
	{

		$this->form_validation->set_rules("barcode", "Barcode", 'required');
		$this->form_validation->set_rules("name", "Name", 'required');
		$this->form_validation->set_rules("type", "Type", 'required');
		$this->form_validation->set_rules("unit", "Unit", 'required');

		if (!$this->form_validation->run()) {
			$this->viewMaterials();
		} else {
			$this->load->model('Material_model');
			$this->Material_model->saveMaterial();
			$this->viewMaterials();
		}

		$this->load->model('Material_model');
		$this->Material_model->updateMaterial();
		$this->viewMaterials();
	}
}
