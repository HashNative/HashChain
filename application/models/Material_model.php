<?php

class Material_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($id = FALSE)
	{
		if (!$id) {
			$query = $this->db->get("material");
			return $query->result_array();
		} else {
			$query = $this->db->get_where('material', array('id' => $id));
			return $query->row_array();
		}
	}

	public function saveMaterial()
	{
		$data = array(
			'barcode' => $this->input->post('barcode'),
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'unit' => $this->input->post('unit')
		);
		return $this->db->insert('material', $data);
	}

	public function deleteMaterial($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('material');
		return true;
	}

	public function updateMaterial()
	{
		$id = url_title($this->input->post('id'));

		$data = array(
			'barcode' => $this->input->post('barcode'),
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'unit' => $this->input->post('unit')
		);

		$this->db->where('id', $id);
		return $this->db->update('material', $data);
	}
}
