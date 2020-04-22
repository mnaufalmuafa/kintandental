<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dokterModel');
    }
    
    public function index() {
        if ($this->session->has_userdata('username')) {
            $data['ListDokter'] = $this->dokterModel->getListDokter();
            $this->load->view('dokter/dokter', $data);
        }
        else {
            redirect('login');
        }
    }
    
    public function tambahDokter() {
        if ($this->session->has_userdata('username')){
            $error = $this->session->flashdata('error');
            if(isset($error)) {
                $data3['error_msg'] = 'NIK sudah terdaftar'; 
                 $this->load->view('dokter/tambahDokter', $data3);
            } else {
                $this->load->view('dokter/tambahDokter');
            }
        } else {
            redirect('login');
        }

        if (isset($_POST['btnTambahDokter'])) {
            if ($this->dokterModel->isExistDokter($this->input->post('nik'))==0) {
                $data1 = array(
                    'id' => $this->input->post('nik'),
                    'str' => $this->input->post('str'),
                    'shift' => $this->input->post('shift'),
                    'gaji' => $this->input->post('gaji')
                );
                $data2 = array(
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama')
                );

                if ($this->dokterModel->isExistOrang($this->input->post('nik'))==0){
                        $this->dokterModel->tambahOrang($data2);
                }
                $this->dokterModel->tambahDokter($data1);

                redirect('dokter');
            } else {
                $this->session->set_flashdata('error', true);
                redirect('dokter/tambahDokter');
            }
        }
    }
    
    public function editDokter($id) {
        if ($this->session->has_userdata('username')){
            $data['dokter'] = $this->dokterModel->getDokter($id);
            $this->load->view('dokter/editDokter', $data);
        } else {
            redirect('login');
        }
        
        if (isset($_POST['btnEditDokter'])){
            $data1 = array(
                'str' => $this->input->post('str'),
                'shift' => $this->input->post('shift'),
                'gaji' => $this->input->post('gaji')
            );
            $this->dokterModel->editDokter($id, $data1);
            redirect('dokter');
        }
    }

    public function hapusDokter($id) {
        $this->dokterModel->hapusPemeriksaan($id);
        $this->dokterModel->hapusDokter($id);
        redirect('dokter');
    }
}

?>
