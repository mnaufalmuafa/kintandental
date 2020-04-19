<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layananModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakLayanan(){
        return $this->db->get('layanan')->num_rows();
    }
    
    public function getListLayanan() {
        $arrHasil = array();
        $queryResult = $this->db->get('layanan')->result_array();
        $i = 0;
        foreach ($queryResult as $pasien) {
            $i = $i + 1;
            $arr = array(
                $i,
                $pasien['id'],
                $pasien['nama'],
                $pasien['tarif']
            );
            array_push($arrHasil,$arr);
        }
        return $arrHasil;
    }
    
    public function addLayanan($data) {
        $this->db->insert('layanan',$data);
    }
    
    public function editLayanan($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('layanan',$data);
    }
    
    public function deleteLayanan($id) {
        $this->db->where('id',$id);
        return $this->db->delete('layanan');
    }
    
    public function deleteFromPemeriksaan($id) {
        $this->db->where('idLayanan',$id);
        return $this->db->delete('pemeriksaan');
    }
}
?>