<?php
class info_pendaftaran extends CI_Model{
    function get_user(){

        $query=$this->db->query("SELECT * FROM user WHERE Nama = '$hasil_search' OR NIM = '$hasil_search'");
        return $query->result_array();
    }
}
?>