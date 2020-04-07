<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
    public function index() {
        $this->load->view('beranda');
    }
    
    public function inputPemeriksaan() {
        $this->load->view('inputPemeriksaan');
        if (isset($_POST['btnInputPemeriksaan'])) {
            redirect('beranda/index');
        }
    }
}

?>