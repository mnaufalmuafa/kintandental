<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokterModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakDokter(){
        return $this->db->get('dokter')->num_rows();
    }
}
?>