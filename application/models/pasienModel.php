<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasienModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPasien(){
        return $this->db->get('pasien')->num_rows();
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
}
?>