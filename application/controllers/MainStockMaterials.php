<?php
class MainStockMaterials extends CI_Controller
{

    public function viewMainStockMaterials()
    {
        $data['pageTitle'] = "Main Stock Materials";
		
		$this->load->model('MainStockMaterial_model');
		$data['mainStocks'] = $this->MainStockMaterial_model->index();

		$this->load->view('sections/admin/templates/header', $data);
		$this->load->view('sections/admin/dashboard/stock/index_mainStockMaterials', $data);
		$this->load->view('sections/admin/templates/footer');
    }

    public function addMainStockMaterials()
    {
        $this->form_validation->set_rules("orderNo", "Purchase Order Number", 'required');
        $this->form_validation->set_rules("barcode", "Barcode", 'required');
        $this->form_validation->set_rules("name", "Material Name", 'required');
        $this->form_validation->set_rules("type", "Material Type", 'required');
        $this->form_validation->set_rules("quantity", "Quantity", 'required');
        $this->form_validation->set_rules("unitprice", "Unit Price", 'required');
        $this->form_validation->set_rules("total", "Total", 'required');

        if (!$this->form_validation->run()) {
            $this->load->view('sections/admin/templates/header');
            $this->load->view('sections/admin/dashboard/stock/add_mainStockMaterials');
            $this->load->view('sections/admin/templates/footer');
        } else {
            $this->load->model('MainStockMaterial_model');
            $this->MainStockMaterial_model->saveMainStockMaterial();
            $this->viewMainStockMaterials();
        }
    }

    public function deleteMainStockMaterials($id)
    {
        $this->load->model('MainStockMaterial_model');
        $this->MainStockMaterial_model->deleteMainStockMaterial($id);
        $this->viewMainStocks();
    }

    public function editMainStockMaterials($id)
    {
        $data['pageTitle'] = "Edit Main Stock Materials";

        $this->load->model('MainStockMaterial_model');
        $data['mainStockMaterial'] = $this->MainStockMaterial_model->index($id);

        $this->load->view('sections/admin/templates/header', $data);
        $this->load->view('sections/admin/dashboard/stock/update_mainStockMaterials', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function updateMainStockMaterials()
    {
        $this->load->model('MainStockMaterial_model');
        $this->MainStockMaterial_model->updateMainStockMaterial();
        $this->viewMainStockMaterials();
    }

    //////////////////////////////////////////////////////////////////////////////////
    public function getMaterialNameByBarcode()
    {
        $barcode = $this->input->post('barcode');

        $this->load->model('MainStockMaterial_model');
        $this->MainStockMaterial_model->getMaterialNameByBarcode($barcode);
    }












    ////////////////Reports
    public function viewCashStocks()
    {
        $this->load->model('MainStockMaterial_model');
        $data['cashStocks'] = $this->MainStockMaterial_model->indexCashStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/stock/report_cashStock', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function viewCompanyStocks()
    {
        $this->load->model('MainStockMaterial_model');
        $data['companyStocks'] = $this->MainStockMaterial_model->indexCompanyStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/stock/report_companyStock', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function viewMainStocks()
    {
        $this->load->model('MainStockMaterial_model');
        $data['mainStocks'] = $this->MainStockMaterial_model->indexMainStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/stock/report_mainStock', $data);
        $this->load->view('sections/admin/templates/footer');
    }
}
