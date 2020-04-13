<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemeriksaanModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPemeriksaan(){
        return $this->db->get('pemeriksaan')->num_rows();
    }
}
?>