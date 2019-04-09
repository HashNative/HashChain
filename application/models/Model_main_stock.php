<?php 

class Model_main_stock extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                        parent::__construct();
        }
    
        public function viewMainStock(){
            $query = $this->db->query("SELECT * FROM main_stock_material");
            return $query->result_array();
        }
}

?>