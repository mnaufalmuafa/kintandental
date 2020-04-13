<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layananModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakLayanan(){
        return $this->db->get('layanan')->num_rows();
    }
}
?>