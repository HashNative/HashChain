<?php 

class Transfer_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

    public function index($id = FALSE){
    	// $this->db->order_by('name');
    	if (!$id) {
    		// $query = $this->db->query("Select * FROM viewstaff");
    		$query = $this->db->get("transfer");
    		return $query->result_array();
    	} else {
    		$query = $this->db->get_where('transfer', array('id' => $id));
    		return $query->row_array();
    	}
    }

    public function saveTransfer() {
    	$data = array(
    		'date' => $this->input->post('date'),
    		'barcode' => $this->input->post('barcode'),
    		'material_name' => $this->input->post('name'),
    		'material_type' => $this->input->post('type'),
    		'unit_price' => $this->input->post('unitPrice'),
    		'transfered_section' => $this->input->post('section'),
    		'quantity' => $this->input->post('quantity'),
    		'cost' => $this->input->post('cost')
    	);
    	return $this->db->insert('transfer', $data);
    }

    public function deleteTransfer($id) {
    	$this->db->where('id', $id);
    	$this->db->delete('transfer');
    	return true;
    }

    public function updateTransfer() {
    	$id = url_title($this->input->post('id'));

    	$data = array(
    		'date' => $this->input->post('date'),
    		'barcode' => $this->input->post('barcode'),
    		'material_name' => $this->input->post('material_name'),
    		'material_type' => $this->input->post('material_type'),
    		'unit_price' => $this->input->post('unit_price'),
    		'transfered_section' => $this->input->post('transfered_section'),
    		'quantity' => $this->input->post('quantity'),
    		'cost' => $this->input->post('cost')
    	);

    	$this->db->where('id', $id);
    	return $this->db->update('transfer', $data);
    }
}
 