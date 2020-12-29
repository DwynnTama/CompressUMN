<?php
//Model info_pendaftaran
class info_pendaftaran extends CI_Model
{
    function get_user($hasil_search)
    {
        $query = $this->db->query("SELECT * FROM list_mahasiswa WHERE NIM = '$hasil_search'");
        $row = $query->num_rows();

        if ($row == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
