<?php
class model_feature extends CI_Model
{
    function get_feature_list()
    {
        $query = $this->db->query("SELECT * FROM list_writing_judul");
        return $query->result_array();
    }

    function get_feature($id)
    {
        $query = $this->db->query("SELECT * FROM list_writing_judul WHERE ID_writing = '$id'");
        $row = $query->num_rows();

        if ($row == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}