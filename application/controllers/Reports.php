<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function viewCashStocks()
    {
        $this->load->model('StockReport_model');
        $data['cashStocks'] = $this->StockReport_model->indexCashStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/reports/report_cashStock', $data);
        $this->load->view('sections/admin/templates/footer');
    }

    public function viewCompanyStocks()
    {
        $this->load->model('StockReport_model');
        $data['companyStocks'] = $this->StockReport_model->indexCompanyStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/reports/report_companyStock', $data);
        $this->load->view('sections/admin/templates/footer');
    } 

    public function viewMainStocks()
    {
        $this->load->model('StockReport_model');
        $data['mainStocks'] = $this->StockReport_model->indexMainStock();

        $this->load->view('sections/admin/templates/header');
        $this->load->view('sections/admin/dashboard/reports/report_mainStock', $data);
        $this->load->view('sections/admin/templates/footer');
    }
}
