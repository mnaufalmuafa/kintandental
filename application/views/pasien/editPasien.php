<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pasien - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/breadcrumb.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/editPasien.css') ?>">
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
            <li><a href="http://localhost/kintandental/index.php/pasien">Pasien</a></li>
            <li class="active">Edit Pasien</li>
        </ul>
        
        <h3>Edit Pasien</h3>
        
        <form class="container-custom" method="post">
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input 
                           type="number" 
                           name="nik" 
                           class="form-control disabled" 
                           id="inputNIK" 
                           placeholder="NIK" 
                           max="9999999999999999"
                           value="332956296500007"
                           required readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input 
                           type="text" name="nama" 
                           class="form-control disabled" id="inputNama" 
                           placeholder="Nama"
                           value="Duta Dutaa"
                           required readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="noTelp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-2">
                    <input 
                           type="tel" 
                           name="noTelp"
                           maxlength="12"
                           minlength="10"
                           pattern="[0]{1}[8]{1}[0-9]{8,10}"
                           class="form-control" 
                           id="inputNoTelp" 
                           placeholder="08xxxxxxxxxx" 
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputPekerjaan" placeholder="Pekerjaan" required>
                </div>
            </div>
            <button 
                    type="submit" 
                    name="btnEditPasien"
                    class="btn btn-primer mt-3 mb-5">Edit Pasien</button>
        </form>
        
        <footer class="footer-copyright text-center py-3 mt-5 fixed-bottom">
            © 2020 Kintan Dental • All rights reserved • Love from Tegal
        </footer>
        
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/FAB.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/Navbar.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/btnCollapsed.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/logout.js') ?>"></script>
    </body>
</html>