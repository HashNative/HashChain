<?php 

class Model_view_main_stock extends CI_Model
{
	public function __construct()
	{
        $this->load->database();
		parent::__construct();
    }
    
    public function viewMainStock($slug = FALSE){
            $query = $this->db->(' SELECT * FROM viewmainstock');
            return $query->result_array();
       }
}

?>