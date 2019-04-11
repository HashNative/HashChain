<?php
class Messages extends CI_Controller
{

    public function viewMessages()
    {
        $data['pageTitle'] = "Messages";

        $this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/messages/mail_box');
		$this->load->view('sections/admin/templates/footer');
    }

    public function composeMessages()
    {
        $this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/messages/mail_compose');
		$this->load->view('sections/admin/templates/footer');
    }

    public function detailMessages()
    {
        $this->load->view('sections/admin/templates/header');
		// $this->load->view('sections/admin/templates/side_navbar');
		// $this->load->view('sections/admin/templates/top_navbar');
        $this->load->view('sections/admin/dashboard/messages/mail_detail');
		$this->load->view('sections/admin/templates/footer');
    }
}
