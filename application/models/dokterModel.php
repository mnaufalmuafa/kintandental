<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokterModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakDokter(){
        return $this->db->get('dokter')->num_rows();
    }
    
    public function getListDokter() {
        $arrHasil = array();
        $queryResult = $this->db->query("SELECT `id`,`nama`,`str`,`shift`,`gaji` FROM `dokter` JOIN `orang` ON (`dokter`.`id` = `orang`.`nik`)")->result_array();
        $i = 0;
        foreach ($queryResult as $dokter) {
            $i = $i + 1;
            $arr = array(
                $i,
                $dokter['id'],
                $dokter['nama'],
                $dokter['str'],
                $dokter['shift'],
                $dokter['gaji']
            );
            array_push($arrHasil,$arr);
        }
        return $arrHasil;
    }

    public function getDokter($id) {
        return $this->db->query("SELECT `id`,`str`,`shift`,`gaji`,`nama` FROM `dokter` JOIN `orang` ON (`dokter`.`id`=`orang`.`nik`)WHERE `nik` = '".$id."'")->row_array();
    }

    public function editDokter($id,$data){
        /*echo var_dump($data);
        echo $id;*/
        $this->db->where('id',$id);
        return $this->db->update('dokter',$data);
    }

    public function isExistOrang($id){
        $this->db->where('nik',$id);
        $query = $this->db->get('orang');
        return $query->num_rows();
    }

    public function isExistDokter($id){
        $this->db->where('id',$id);
        $query = $this->db->get('dokter');
        return $query->num_rows();
    }

    public function hapusDokter($id){
        $this->db->where('id',$id);
        return $this->db->delete('dokter');
    }

    public function hapusPemeriksaan($id){
        $this->db->where('idDokter',$id);
        return $this->db->delete('pemeriksaan');
    }

    public function tambahDokter($data){
        return $this->db->insert('dokter',$data);
    }

    public function tambahOrang($data){
        return $this->db->insert('orang',$data);
    }
}
?>
