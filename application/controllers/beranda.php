<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
    public function index() {
        if ($this->session->has_userdata('username')) {
            $this->load->view('beranda');
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