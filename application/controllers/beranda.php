<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('loginModel');
        $this->load->model('pemeriksaanModel');
        $this->load->model('dokterModel');
        $this->load->model('pasienModel');
        $this->load->model('layananModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $data = array(
                'nPemeriksaan' => $this->pemeriksaanModel->getBanyakPemeriksaan(),
                'nDokter' => $this->dokterModel->getBanyakDokter(),
                'nPasien' => $this->pasienModel->getBanyakPasien(),
                'nLayanan' => $this->layananModel->getBanyakLayanan(),
                'dataPemeriksaan' => json_decode($this->pemeriksaanModel->getPemeriksaan())
            );
            $this->load->view('beranda',$data);
        }
        else {
            redirect('login');
        }
    }
    
    public function inputPemeriksaan() {
        $this->load->view('inputPemeriksaan');
        if (isset($_POST['btnInputPemeriksaan'])) {
            redirect('beranda/index');
        }
    }
}

?>