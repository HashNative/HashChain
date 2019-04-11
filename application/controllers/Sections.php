<?php
class Sections extends CI_Controller
{
    public function viewSections()
    {
        $data['pageTitle'] = "Sections/Departments";
        $this->load->model('Section_model');
        $data['sections'] = $this->Section_model->index();

        $this->load->view('sections/admin/templates/header', $data);
        $this->load->view('sections/admin/dashboard/sections/index_sections', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function addSections()
    {
        $data['pageTitle'] = "Sections/Departments";
        
        $this->form_validation->set_rules("name", "Name", 'required');
        
        $this->load->model('Section_model');
        $data['sections'] = $this->Section_model->index();

        if (!$this->form_validation->run()) {
            $this->load->view('sections/admin/templates/header', $data);
            $this->load->view('sections/admin/dashboard/sections/index_sections', $data);
            $this->load->view('sections/admin/templates/footer');
        } else {
            $this->load->view('sections/admin/templates/header', $data);
            $this->load->view('sections/admin/dashboard/sections/index_sections', $data);
            $this->load->view('sections/admin/templates/footer');
        }
    }

    public function deleteSections($id)
    {
        $this->load->model('Section_model');
        $this->Section_model->deleteSection($id);
        $this->viewSections();
    }

    public function editSections($id)
    {
        $data['pageTitle'] = "Edit Sections";

        $this->load->model('Section_model');
        $data['sections'] = $this->Section_model->index();
        $data['section'] = $this->Section_model->index($id);

        $this->load->view('sections/admin/templates/header', $data);
        $this->load->view('sections/admin/dashboard/sections/update_sections', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function updateSections()
    {
        $this->load->model('Section_model');
        $this->Section_model->updateSection();
        $this->viewSections();
    }
}
