<?php 

class Staff_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

    public function index($id = FALSE){

    	// $this->db->order_by('name');

    	if (!$id) {
    		// $query = $this->db->query("Select * FROM viewstaff");
    		$query = $this->db->get("staff");
    		return $query->result_array();
    	} else {
    		$query = $this->db->get_where('staff', array('id' => $id));
    		return $query->row_array();
    	}
    }

    public function saveStaff() {

    	$data = array(
    		'name' => $this->input->post('name'),
    		'type' => $this->input->post('employeeType'),
    		'section' => $this->input->post('section'),
    		'salary' => $this->input->post('basicSalary')
    	);

    	return $this->db->insert('staff', $data);
    }

    public function deleteStaff($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('staff');
    	return true;
    }

    public function updateStaff() {
    	$id = url_title($this->input->post('id'));

    	$data = array(
    		'name' => $this->input->post('name'),
    		'type' => $this->input->post('employeeType'),
    		'section' => $this->input->post('section'),
    		'salary' => $this->input->post('basicSalary')
    	);

    	$this->db->where('id', $id);
    	return $this->db->update('staff', $data);
    }
}
 