<?php
class Staff extends CI_Controller {

	public function viewStaff()
	{
		$data['pageTitle'] = "Staff";

		$this->load->model('Staff_model');
		$data['staff'] = $this->Staff_model->index();

		$this->load->view('sections/admin/templates/header', $data);
        $this->load->view('sections/admin/dashboard/staff/index_staff', $data);
		$this->load->view('sections/admin/templates/footer');
	}

    public function addStaff() {

        $this->form_validation->set_rules("name", "Name", 'required|alpha');
        $this->form_validation->set_rules("employeeType", "Employee Type", 'required');
        $this->form_validation->set_rules("section", "Section", 'required');
        $this->form_validation->set_rules("basicSalary", "Basic Salary", 'numeric|required');
        
        if(!$this->form_validation->run()) {
            $this->viewStaff();
        } else {
        	$this->load->model('Staff_model');
        	$this->Staff_model->saveStaff();
            $this->viewStaff();
        }	
	}

	public function deleteStaff($id) {
		$this->load->model('Staff_model');
		$this->Staff_model->deleteStaff($id);
		$this->viewStaff();
	}

	public function editStaff($id) {

		$data['pageTitle'] = "Edit Staff";

		$this->load->model('Staff_model');
		$data['staff'] = $this->Staff_model->index($id);

		$this->load->view('sections/admin/templates/header', $data);
        $this->load->view('sections/admin/dashboard/staff/update_staff', $data);
		$this->load->view('sections/admin/templates/footer');
	}

	public function updateStaff() {
		$this->load->model('Staff_model');
		$this->Staff_model->updateStaff();
		$this->viewStaff();
	}
}