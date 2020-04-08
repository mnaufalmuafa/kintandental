<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
    public function index() {
        $this->load->view('pasien/pasien');
    }
    
    public function tambahPasien() {
        $this->load->view('pasien/tambahPasien');
        if (isset($_POST['btnTambahPasien'])) {
            redirect('pasien');
        }
    }
}

?>