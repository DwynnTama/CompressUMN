<?php
class tampil_podcast extends CI_Model
{
    function get_podcast()
    {
        $query = $this->db->query("SELECT * FROM list_podcast_data");
        return $query->result_array();
    }
}
