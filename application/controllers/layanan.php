<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layanan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('layananModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $data['ListLayanan'] = $this->layananModel->getListLayanan();
            $this->load->view('layanan/layanan',$data);
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
        $data = $this->db->insert('layanan',$data1);
        echo json_encode($data);
    }
    
    public function getDataLayanan() {
        $query = $this->db->get('layanan')->result_array();
        echo json_encode($query);
    }
}

?>