<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemeriksaanModel extends CI_Model {
    function construct() {
        parent::__construct();
    }
    
    function getBanyakPemeriksaan(){
        return $this->db->get('pemeriksaan')->num_rows();
    }
    
    private function getWaktu($jam,$menit) {
        return $jam." : ".$menit;
    }


    function isExist(){
        $nDokter = $this->db->get('dokter')->num_rows();
        $nPasien = $this->db->get('pasien')->num_rows();
        $nLayanan = $this->db->get('layanan')->num_rows();

        if($nDokter>0 && $nPasien>0 && $nLayanan>0){
            return true;
        }
        else{
            return false;
        }
    }

    public function tambahPemeriksaan($data){
        //INSERT INTO `pemeriksaan` ( `idDokter`, `idPasien`, `idLayanan`, `tanggal`, `jam`, `menit`) VALUES ( '123123', '1234567890123456', '5', '2020-04-23', '12', '07') 
        $this->db->query("INSERT INTO `pemeriksaan` ( `idDokter`, `idPasien`, `idLayanan`, `tanggal`, `jam`, `menit`) VALUES ( '".$data['idDokter']."', '".$data['idPasien']."', '".$data['idLayanan']."', '".$data['tanggal']."', '".$data['jam']."', '".$data['menit']."')");  
    }
    
    function getPemeriksaan() {
        $n = $this->getBanyakPemeriksaan();
        $arrDokter = $this->db->query('SELECT `nama` FROM `pemeriksaan` JOIN `dokter` ON (`pemeriksaan`.`idDokter` = `dokter`.`id`) JOIN `orang` ON (`dokter`.`id` = `orang`.`nik`)')->result_array();
        $arrPasien = $this->db->query('SELECT `nama` FROM `pemeriksaan` JOIN `pasien` ON (`pemeriksaan`.`idPasien` = `pasien`.`id`) JOIN `orang` ON (`pasien`.`id` = `orang`.`nik`)')->result_array();
        $arrPemeriksaan = $this->db->query('SELECT `tanggal`,`jam`,`menit`, `nama`,`tarif` FROM `pemeriksaan` JOIN `layanan` ON (`layanan`.`id`= `pemeriksaan`.`idLayanan`)')->result_array();
        $arrHasil = array();
        $i=0;
        foreach ($arrPemeriksaan as $pemeriksaan){
            $tarif = "Rp. ".number_format($pemeriksaan['tarif'],0,",",".");
            $subArr = array(
                $i+1,
                $arrDokter[$i]['nama'], 
                $arrPasien[$i]['nama'], 
                $pemeriksaan['tanggal'], 
                $this->getWaktu($pemeriksaan['jam'],$pemeriksaan['menit']),
                $pemeriksaan['nama'], 
                $tarif
            );
            $i = $i + 1;
            array_push($arrHasil,$subArr);
        }
        $json = json_encode($arrHasil);
        return $json;
    }
}
?>
