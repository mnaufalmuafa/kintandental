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
}
?>