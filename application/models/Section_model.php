<?php

class Section_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function index($id = FALSE)
    {
        if (!$id) {
            $query = $this->db->get("section");
            return $query->result_array();
        } else {
            $query = $this->db->get_where('section', array('id' => $id));
            return $query->row_array();
        }
    }

    public function saveSection()
    {
        $data = array(
            'name' => $this->input->post('name')
        );
        return $this->db->insert('section', $data);
    }

    public function deleteSection($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('section');
        return true;
    }

    public function updateSection()
    {
        $id = url_title($this->input->post('id'));

        $data = array(
            'name' => $this->input->post('name')
        );

        $this->db->where('id', $id);
        return $this->db->update('section', $data);
    }
}
