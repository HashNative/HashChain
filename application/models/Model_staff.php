<?php 

class Model_staff extends CI_Model
{

    function return_staff()
    {
        $this->load->database();

        $query = $this->db->query("Select * FROM viewstaff");

        return $query->result_array();
    }

    function add_staff()
    {
        $this->load->database();

        $name = $this->input->post('Name');
        $type = $this->input->post('Type');
        $section = $this->input->post('Section');
        $basicSalary = $this->input->post('Basic Salary');
        $data = array(
            'Name' => $name,
            'Type' => $type,
            'Section' => $section,
            'Basic Salary' => $basicSalary
        );

        $this->db->insert('viewstaff', $data);
        
    }
}
 