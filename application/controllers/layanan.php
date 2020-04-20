<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layanan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('layananModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $this->load->view('layanan/layanan');
        }
        else {
            redirect('login');
        }
    }
    
    public function addLayanan() {
        echo $this->input->post('nama');
        echo $this->input->post('tarif');
        $data1 = array(
            "nama" => $this->input->post('nama'),
            "tarif" => $this->input->post('tarif')
        );
        $data = $this->layananModel->addLayanan($data1);
        echo json_encode($data);
    }
    
    public function getDataLayanan() {
        $query = $this->layananModel->getDataLayanan();
        echo json_encode($query);
    }
    
    public function hapus() {
        $id = $this->input->post('id');
        $data = $this->layananModel->deleteFromPemeriksaan($id);
        $data = $this->layananModel->deleteLayanan($id);
        echo json_encode($data);
    }
    
    public function editLayanan() {
        $id = $this->input->post('id');
        $data = array (
            "nama" => $this->input->post('nama'),
            "tarif" => $this->input->post('tarif')
        );
        $data2 = $this->layananModel->editLayanan($id,$data);
        echo json_encode($data2);
    }
}

?>