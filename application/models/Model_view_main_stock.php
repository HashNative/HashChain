<?php 

class Model_view_main_stock extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                        parent::__construct();
        }
    
        public function viewMainStock(){
            $query = $this->db->query("SELECT * FROM viewmainstock");
            return $query->result_array();
        }
}

?>