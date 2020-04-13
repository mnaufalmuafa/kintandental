<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemeriksaanModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPemeriksaan(){
        return $this->db->get('pemeriksaan')->num_rows();
    }
    
    function getPemeriksaan() {
        $n = $this->getBanyakPemeriksaan();
        $arrDokter = $this->db->query('SELECT `nama` FROM `pemeriksaan` JOIN `dokter` ON (`pemeriksaan`.`idDokter` = `dokter`.`id`) JOIN `orang` ON (`dokter`.`id` = `orang`.`nik`)')->result_array();
        $arrPasien = $this->db->query('SELECT `nama` FROM `pemeriksaan` JOIN `pasien` ON (`pemeriksaan`.`idPasien` = `pasien`.`id`) JOIN `orang` ON (`pasien`.`id` = `orang`.`nik`)')->result_array();
        $arrPemeriksaan = $this->db->query('SELECT `tanggal`,`jam`,`menit`, `nama`,`tarif` FROM `pemeriksaan` JOIN `layanan` ON (`layanan`.`id`= `pemeriksaan`.`idLayanan`)')->result_array();
        $arrHasil = array();
        $i=0;
        foreach ($arrPemeriksaan as $pemeriksaan){
            $subArr = array($arrDokter[$i],$arrPasien[$i],$pemeriksaan['tanggal'],$pemeriksaan['jam'],$pemeriksaan['nama'], $pemeriksaan['tarif']);
            $i = $i + 1;
            array_push($arrHasil,$subArr);
        }
        $json = json_encode($arrHasil);
        return $json;
    }
}
?>