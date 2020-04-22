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
        $error = $this->session->flashdata('error');
        if ($this->session->has_userdata('username')){
            if(isset($error)) {
                $data3['error_msg'] = 'NIK sudah terdaftar'; 
                 $this->load->view('pasien/tambahPasien', $data3);
            } else {
                $this->load->view('pasien/tambahPasien');
            }
        } else {
            redirect('login');
        }    
        
        if (isset($_POST['btnTambahPasien'])) {
            if ($this->pasienModel->isExistPasien($this->input->post('nik'))==0) {
                $data1 = array(
                    'id' => $this->input->post('nik'),
                    'alamat' => $this->input->post('alamat'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'noTelp' => $this->input->post('noTelp'),
                );
                $data2 = array(
                    'nik' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),

                );
                if ($this->pasienModel->isExistOrang($this->input->post('nik'))==0){
                    $this->pasienModel->tambahOrang($data2);
                }
                $this->pasienModel->tambahPasien($data1);

                redirect('pasien');
            }else {
                $data1 = array(
                    'nik' => $this->input->post('nik'),
                    'alamat' => $this->input->post('alamat'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'noTelp' => $this->input->post('noTelp'),
                    'error_msg' => 'NIK telah terdaftar',
                );
                $this->session->set_flashdata('error', true);
                redirect('pasien/tambahPasien');
            }
        }
    }
    
    public function editPasien($id) {
        if ($this->session->has_userdata('username')){
            $data['pasien'] = $this->pasienModel->getPasien($id);
            $this->load->view('pasien/editPasien',$data);
        } else {
            redirect('login');
        }
            
        if (isset($_POST['btnEditPasien'])){
            $data1 = array(
                'id' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'noTelp' => $this->input->post('noTelp'),
            );
            $data2 = $this->pasienModel->editPasien($this->input->post('nik'),$data1);
            redirect('pasien');
        }
    }

    public function hapusPasien($id){
        $this->pasienModel->hapusPemeriksaan($id);
        $this->pasienModel->hapusPasien($id);
        redirect('pasien');
    }
}

?>
