<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('loginModel');
    }
    
    public function index() {
        $error = $this->session->flashdata('error');
        if (isset($error)) {
            $content = array(
                'error_msg' => "username atau password salah, coba lagi"
            );
            $this->load->view('login',$content);
        }
        else {
            $this->load->view('login');
        }
        if (isset($_POST['btnLogin'])) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $login = $this->loginModel->login($data);
            if ($login) {
                $this->session->set_userdata('username', $data['username']);
                $this->intentToBeranda();
            }
            else {
                $this->session->set_flashdata('error', true);
                redirect('login/index');
            }
        }
    }
    
    public function intentToBeranda() {
        redirect('beranda/index');
    }
}


?>