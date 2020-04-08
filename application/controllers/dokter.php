<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {
    public function index() {
        $this->load->view('dokter/dokter');
    }
    
    public function tambahDokter() {
        $this->load->view('dokter/tambahDokter');
        if (isset($_POST['btnTambahDokter'])) {
            redirect('dokter');
        }
    }
    
    public function editDokter($id) {
        $this->load->view('dokter/editDokter');
        if (isset($_POST['btnEditDokter'])){
            redirect('dokter');
        }
    }
}

?>