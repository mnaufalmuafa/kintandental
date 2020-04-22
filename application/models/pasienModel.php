<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasienModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPasien(){
        return $this->db->get('pasien')->num_rows();
    }
    
    public function tambahPasien($data){
        return $this->db->insert('pasien',$data);
    }

    public function tambahOrang($data){
        return $this->db->insert('orang',$data);
    }

    public function isExistOrang($id){
        $this->db->where('nik',$id);
        $query = $this->db->get('orang');
        return $query->num_rows();
    }

    public function isExistPasien($id){
        $this->db->where('id',$id);
        $query = $this->db->get('pasien');
        return $query->num_rows();
    }

    public function editPasien($id,$data){
        echo var_dump($data);
        echo $id;
        $this->db->where('id',$id);
        return $this->db->update('pasien',$data);
    }

    public function hapusPasien($id){
        $this->db->where('id',$id);
        return $this->db->delete('pasien');
    }

    public function hapusPemeriksaan($id){
        $this->db->where('idPasien',$id);
        return $this->db->delete('pemeriksaan');
    }    

    public function hapusOrang($id){
        $this->db->where('nik',$id);
        return $this->db->delete('orang');
    }
    
    public function getListPasien() {
        $arrHasil = array();
        $queryResult = $this->db->query("SELECT `id`,`nama`,`alamat`,`noTelp`,`pekerjaan` FROM `pasien` JOIN `orang` ON (`pasien`.`id` = `orang`.`nik`)")->result_array();
        $i = 0;
        foreach ($queryResult as $pasien) {
            $i = $i + 1;
            $arr = array(
                $i,
                $pasien['id'],
                $pasien['nama'],
                $pasien['alamat'],
                $pasien['noTelp'],
                $pasien['pekerjaan']
            );
            array_push($arrHasil,$arr);
        }
        return $arrHasil;
    }

    public function getPasien($id){
        return $this->db->query("SELECT `id`,`alamat`,`noTelp`,`pekerjaan`,`nama` FROM `pasien` JOIN `orang` ON (`pasien`.`id`=`orang`.`nik`)")->row_array();
    }
}
?>
