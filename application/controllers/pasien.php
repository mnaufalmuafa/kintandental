<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('pasienModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $data['ListPasien'] = $this->pasienModel->getListPasien();
            $this->load->view('pasien/pasien',$data);
        }
        else {
            redirect('login');
        }
    }
    
    public function tambahPasien() {
        $this->load->view('pasien/tambahPasien');
        if (isset($_POST['btnTambahPasien'])) {
            redirect('pasien');
        }
    }
    
    public function editPasien($id) {
        $this->load->view('pasien/editPasien');
        if (isset($_POST['btnEditPasien'])){
            redirect('pasien');
        }
    }
}

?>