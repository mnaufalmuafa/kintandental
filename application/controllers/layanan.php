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
}

?>