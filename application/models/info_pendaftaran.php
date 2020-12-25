<?php
//Model info_pendaftaran
class info_pendaftaran extends CI_Model
{
    function get_user($hasil_search)
    {

        $query = $this->db->query("SELECT * FROM list_mahasiswa WHERE Nama = '$hasil_search' OR NIM = '$hasil_search'");
        return $query->result_array();
    }
?>