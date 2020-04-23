<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Input Pemeriksaan - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/breadcrumb.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/inputPemeriksaan.css') ?>">
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
                    <a href="http://localhost/kintandental/index.php/pasien">Pasien</a>
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
        
        <ul class="breadcrumb-custom">
            <li><a href="http://localhost/kintandental/index.php/beranda">Beranda</a></li>
            <li class="active">Input Pemeriksaan</li>
        </ul>
        
        <h3>Input Pemeriksaan</h3>
        
        <form class="container-custom" method="post">
            <div class="form-group row">
                <label for="dokter" class="col-sm-2 col-form-label">Dokter</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input 
                               type="text"
                               value="<?= $dataDokter[0][1] ?> - <?= $dataDokter[0][2] ?>" 
                               name="dokter" 
                               class="form-control" id="inputDokter" placeholder="Dokter"readonly required>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primer" data-toggle="modal" data-target="#modalDokter">Pilih</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pasien" class="col-sm-2 col-form-label">Pasien</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input 
                               type="text" 
                               value="<?= $dataPasien[0][1] ?> - <?= $dataPasien[0][2] ?>"
                               name="pasien" 
                               class="form-control" id="inputPasien" placeholder="Pasien" readonly required>
                         <span class="input-group-btn">
                            <button type="button" class="btn btn-primer" data-toggle="modal" data-target="#modalPasien">Pilih</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="text" name="tanggal" class="form-control" id="inputTanggal" placeholder="Tanggal" required readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-10">
                    <input type="time" name="jam" class="form-control inputJam" id="inputJam" placeholder="Waktu pemeriksaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="layanan" class="col-sm-2 col-form-label">Layanan</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input 
                               type="text"
                                value="<?= $dataLayanan[0][1] ?> - <?= $dataLayanan[0][2] ?>" 
                               name="layanan" 
                               class="form-control" id="inputLayanan" placeholder="Layanan" readonly required>
                         <span class="input-group-btn">
                            <button type="button" class="btn btn-primer" data-toggle="modal" data-target="#modalLayanan">Pilih</button>
                        </span>
                    </div>
                </div>
            </div>
            <button 
                    type="submit" 
                    name="btnInputPemeriksaan"
                    class="btn btn-primer mt-3">Input Pemeriksaan</button>
        </form>
        
        <footer class="footer-copyright text-center py-3 mt-5 fixed-bottom">
            © 2020 Kintan Dental • All rights reserved • Love from Tegal
        </footer>
        
        <div id="modalDokter" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form role="form" id="form-tambah" method="post" action="input.php">
                        <div class="modal-header">
                            <center>
                                <h5 class="modal-title">Pilih Dokter</h5>
                            </center>
                        </div>
                        <div class="modal-body">
                            <table width="100%" class="table table-hover"  id="example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     foreach($dataDokter as $dokter) {
                                        echo '<tr id="dokter" data-id="'.$dokter[1].'" data-nama="'.$dokter[2].'" >';
                                        echo '<td>'.$dokter[1].'</td>';
                                        echo '<td>'.$dokter[2].'</td>';
                                        echo '</tr>';
                                        
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primer" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
        
        <div id="modalPasien" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form role="form" id="form-tambah" method="post" action="input.php">
                        <div class="modal-header">
                            <center>
                                <h5 class="modal-title">Pilih Pasien</h5>
                            </center>
                        </div>
                        <div class="modal-body">
                            <table width="100%" class="table table-hover"  id="example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     foreach($dataPasien as $pasien) {
                                        echo '<tr id="pasien" data-id="'.$pasien[1].'" data-nama="'.$pasien[2].'" >';
                                        echo '<td>'.$pasien[1].'</td>';
                                        echo '<td>'.$pasien[2].'</td>';
                                        echo '</tr>';
                                        
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primer" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
        
        <div id="modalLayanan" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form role="form" id="form-tambah" method="post" action="input.php">
                        <div class="modal-header">
                            <center>
                                <h5 class="modal-title">Pilih Layanan</h5>
                            </center>
                        </div>
                        <div class="modal-body">
                            <table width="100%" class="table table-hover"  id="example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                     foreach($dataLayanan as $layanan) {
                                        echo '<tr id="layanan" data-id="'.$layanan[1].'" data-nama="'.$layanan[2].'" >';
                                        echo '<td>'.$layanan[1].'</td>';
                                        echo '<td>'.$layanan[2].'</td>';
                                        echo '</tr>';
                                        
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primer" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
        
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/FAB.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/Navbar.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/btnCollapsed.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/logout.js') ?>"></script>
        <script src="<?= base_url('assets/js/viewController/inputPemeriksaan.js') ?>"></script>
        
    </body>
</html>
