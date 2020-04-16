<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dokterModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $data['ListDokter'] = $this->dokterModel->getListDokter();
            $this->load->view('dokter/dokter', $data);
        }
        else {
            redirect('login');
        }
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