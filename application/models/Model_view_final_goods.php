<?php 

class Model_view_final_goods extends CI_Model
{
	public function __construct()
	{
        $this->load->database();
		parent::__construct();
    }
    
    public function viewFinalGood(){
            $query = $this->db->query("SELECT * FROM viewfinalgood");
            return $query->result_array();
       }
}

?>