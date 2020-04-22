<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Pasien - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/pasien.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/fab.css') ?>">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    </head>
    <body>
        <nav>
            <ul class="topnav" id="dropdownClick">
                <li class="brand-container">
                    <p>Kintan Dental</p>
                </li>
                
                <li 
                    class="topnav-right"
                    id="link-1">
                    <button class="btn btn-logout rounded-0" onclick="logout()">Logout</button>
                </li>
                
                <li 
                    class="topnav-right"
                    id="link-2">
                    <a href="http://localhost/kintandental/index.php/layanan">Layanan</a>
                </li>
                <li 
                    class="topnav-right"
                    id="link-3">
                    <a class="link-active" href="#">Pasien</a>
                </li>
                <li 
                    class="topnav-right"
                    id="link-4">
                    <a href="http://localhost/kintandental/index.php/dokter">Dokter</a>
                </li>
                
                <li 
                    class="topnav-right"
                    id="link-5">
                    <a href="http://localhost/kintandental/index.php/beranda">Beranda</a>
                </li>
                
                <li class="dropdownIcon" id="intentDropDown"><a href="javascript:void(0)">&#9776;</a></li>
            </ul>
        </nav>
        
        <div class="container_satu w-100 d-flex" >
            <h4>Daftar Pasien</h4>
            <button 
                    class="btn btn-primer ml-auto btn-collapsed" 
                    id="btnInputPasien"
                    onclick="intentToTambahPasien()"> Tambah Pasien </button>
        </div>
        
        <div class="tabel" style="overflow-x: auto; margin-top: 20px; margin-bottom: 70px;">
            <?php //membuat tabel
                $tableTemplate = array(
                    'table_open' => '<table class="table table-bordered" id="tabel">',
                    'thead_open' => '<thead>'
                );
                $this->table->set_template($tableTemplate);
                $this->table->set_heading('No','NIK','Nama','Alamat','No Telp','Pekerjaan','Aksi');
                $i = 0;
                $ic_edit_account_loc = base_url('assets/icon/ic_edit_account.png');
                $ic_delete_account_loc = base_url('assets/icon/ic_delete_account.png');
                foreach($ListPasien as $pasien) {
                    $i = $i + 1;
                    $this->table->add_row(
                        $pasien[0],
                        $pasien[1],
                        $pasien[2],
                        $pasien[3],
                        $pasien[4],
                        $pasien[5],
                        '
                            <img 
                                 class="ic-aksi ic-aksi-edit"
                                 src="'.$ic_edit_account_loc.'"
                                 data-tippy-content="Edit Pasien"
                                 data-id="'.$pasien[1].'">
                            <img 
                                 class="ic-aksi ic-aksi-hapus" 
                                 src="'.$ic_delete_account_loc.'"
                                 data-tippy-content="Hapus Pasien"
                                 data-id="'.$pasien[1].'">
                        '
                    );
                }
                echo $this->table->generate();
            ?>
        </div>
        
        <a href="http://localhost/kintandental/index.php/pasien/tambahPasien" class="FAB p" id="FAB">
            +
        </a>
        
        <footer class="page-footer text-center py-3 w-100 fixed-bottom" 
                style="background-color: #E1D9D9;">
            © 2020 Kintan Dental • All rights reserved • Love from Tegal
        </footer>
        
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script src="<?= base_url('assets/js/controller/FAB.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/Navbar.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/btnCollapsed.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/logout.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/tooltipIcAksi.js') ?>"></script>
        <script src="<?= base_url('assets/js/viewController/pasien.js') ?>"></script>
    </body>
</html>
