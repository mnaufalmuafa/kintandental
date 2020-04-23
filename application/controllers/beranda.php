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
            $error = $this->session->flashdata('error');
            if(isset($error)){
                $data['error_msg'] = 'Belum ada dokter atau pasien atau layanan';
             }
            $this->load->view('beranda',$data);
        }
        else {
            redirect('login');
        }
    }
    
    public function inputPemeriksaan() {
        if ($this->session->has_userdata('username')){
            if($this->pemeriksaanModel->isExist()){
               $data['dataDokter']=$this->dokterModel->getListDokter();
               $data['dataPasien']=$this->pasienModel->getListPasien();
               $data['dataLayanan']=$this->layananModel->getListLayanan();
               $this->load->view('inputPemeriksaan',$data);
            }
            else{
                $this->session->set_flashdata('error', true);
                redirect('beranda');
            }

        }
        else{
             redirect('login');
        }
       
        if (isset($_POST['btnInputPemeriksaan'])) {
            //substr("12312 - lala",0,strpos("12312 - lala"," ")+1)
            $idDokter = substr($this->input->post('dokter'),0,strpos($this->input->post('dokter'),' ')+1);
            $idPasien = substr($this->input->post('pasien'),0,strpos($this->input->post('pasien'),' ')+1);
            $idLayanan = substr($this->input->post('layanan'),0,strpos($this->input->post('layanan'),' ')+1);
            $tanggal=$this->input->post('tanggal');
            $jam = substr($this->input->post('jam'),0,strpos($this->input->post('jam'),':'));
            $menit = substr($this->input->post('jam'),strpos($this->input->post('jam'),':')+1,strlen($this->input->post('jam')));
            $data = array(
                'idDokter'=> $idDokter,
                'idPasien'=> $idPasien,
                'idLayanan'=> $idLayanan,
                'tanggal'=> $tanggal,
                'jam'=> $jam,
                'menit'=> $menit
            );
            $this->pemeriksaanModel->tambahPemeriksaan($data);
            redirect('beranda/index');

        }
    }
}

?>
