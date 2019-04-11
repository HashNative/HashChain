<?php 

class Model_main_stock extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                        parent::__construct();
        }
    
        
        public function viewMainStock($id=FALSE)
        {
                if(!$id){
                        $query=$this->db->get("main_stock_material");
                        return $query->result_array();
                }
                else{
                        $query=$this->db->get_where('main_stock_material',array('id'=>$id));
                        return $query->row_array();
                }
        }

        public function deleteMainStock($id){
                        
			$this->db->where('id', $id);
			$this->db->delete('main_stock_material');
                        return true;
        }  

}

?>