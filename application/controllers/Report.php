<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

    public function reportmonthlycost()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_monthly_cost');
		$this->load->view('sections/admin/templates/footer');
	}

	public function reportdailycost()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_daily_cost');
		$this->load->view('sections/admin/templates/footer');
	}

	public function reportdailytransfer()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_daily_transfer');
		$this->load->view('sections/admin/templates/footer');
	}

	public function reportcashstock()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_cash_stock');
		$this->load->view('sections/admin/templates/footer');
	}

	public function reportcompanystock()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_company_stock');
		$this->load->view('sections/admin/templates/footer');
    }
    
	public function reportmainstock()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_main_stock');
		$this->load->view('sections/admin/templates/footer');
    }
    
	public function reportgrn()
	{
		$this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/report_grn');
		$this->load->view('sections/admin/templates/footer');
	}
    
}
