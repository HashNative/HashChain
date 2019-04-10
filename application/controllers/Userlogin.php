<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends Admin_Controller 
{

	public function __construct()
	{
        parent::__construct();
        $this->load->helper('security');  
        $this->load->library('form_validation');
        $this->load->database();
	}
    
    public function userlogin(){

        $this->form_validation->set_rules('username', 'Username:', 'required|trim');  
        $this->form_validation->set_rules('pwd', 'Password:', 'required|trim'); 


        if ($this->form_validation->run() == FALSE)   
        {  
            $this->load->view('templates/header');
            $this->load->view('sections/user/login/login');
            $this->load->view('templates/footer'); 
        }   
        else {  

            if($this->input->post('login'))
            {
                $Username=$this->input->post('username');
                $Password=$this->input->post('pwd');
            
            $query=$this->db->query("select * from login where Username='".$Username."' and Password='$Password'");
            $row = $query->num_rows();
                if($row)
                {
                    $this->load->view('sections/user/header');
                    $this->load->view('sections/user/dashboard/user_dashboard');
                    $this->load->view('templates/footer');
                }
                else
                {
                    $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                } 
            }  
            
        }
		
}

