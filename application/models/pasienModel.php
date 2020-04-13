<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasienModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPasien(){
        return $this->db->get('pasien')->num_rows();
    }
}
?>