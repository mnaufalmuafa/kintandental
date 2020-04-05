<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function index() {
        $this->load->view('login');
        if (isset($_POST['btnLogin'])) {
            $this->intentToBeranda();
        }
    }
    
    public function intentToBeranda() {
        redirect('beranda/index');
    }
    
    public function logout() {
        redirect('login/index');
    }
}


?>