<?php

class MainStockMaterial_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function index($id = FALSE)
	{
		if (!$id) {
			$query = $this->db->get("main_stock_material");
			return $query->result_array();
		} else {
			$query = $this->db->get_where('main_stock_material', array('id' => $id));
			return $query->row_array();
		}
	}

	public function saveMainStockMaterial()
	{
		$data = array(
			'purchase_order_no' => $this->input->post('orderNo'),
			'barcode' => $this->input->post('barcode'),
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'quantity' => $this->input->post('quantity'),
			'unit_price' => $this->input->post('unitprice'),
			'total' => $this->input->post('total'),
			'target' => $this->input->post('target')
		);
		return $this->db->insert('main_stock_material', $data);
	}

	public function deleteMainStockMaterial($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('main_stock_material');
		return true;
	}

	public function updateMainStockMaterial()
	{
		$id = url_title($this->input->post('id'));

		$data = array(
			'purchase_order_no' => $this->input->post('orderNo'),
			'barcode' => $this->input->post('barcode'),
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'quantity' => $this->input->post('quantity'),
			'unit_price' => $this->input->post('unitprice'),
			'total' => $this->input->post('total'),
			'target' => $this->input->post('target')
		);

		$this->db->where('id', $id);
		return $this->db->update('main_stock_material', $data);
	}

	public function getMaterialNameByBarcode($barcode) {
		if (!$barcode) {
			$query = $this->db->get("main_stock_material");
			return $query->result_array();
		} else {
			$this->db->select('name');
			$query = $this->db->get_where('main_stock_material', array('barcode' => $barcode));
			return $query->row_array();
		}
	}






	




	///////////// Reports
	public function indexCashStock()
	{
		$sql = "SELECT * from main_stock_material WHERE target = ?";
		$query = $this->db->query($sql, array('Cash'));
		return $query->result_array();
	}

	public function indexCompanyStock()
	{
		$sql = "SELECT * from main_stock_material WHERE target = ?";
		$query = $this->db->query($sql, array('Company'));
		return $query->result_array();
	}

	public function indexMainStock()
	{
		$sql = "SELECT * from main_stock_material";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
