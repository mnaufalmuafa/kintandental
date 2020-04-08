<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Dokter - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/tambahDokter.css') ?>">
        <style>
            .btn-primer {
                background-color: #A66C20;
                color: white;
                float: right;
            }

            .btn-primer {
                color: white !important;
            }
            
            footer {
                background-color: #E1D9D9;
            }
            
            form.container-custom {
                margin-bottom: 130px;
            }
            
            select {
                background-color: rgba(1,9,9,0) !important;
            }
            
            select option {
                background: rgba(255,228,196,0.35) !important;
            }
        </style>
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
            <li><a href="http://localhost/kintandental/index.php/dokter">Dokter</a></li>
            <li class="active">Tambah Dokter</li>
        </ul>
        
        <h3>Tambah Dokter</h3>
        
        <form class="container-custom" method="post">
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input 
                           type="number" 
                           name="nik" 
                           class="form-control" 
                           id="inputNIK" 
                           placeholder="NIK" 
                           max="9999999999999999"
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="str" class="col-sm-2 col-form-label">No STR</label>
                <div class="col-sm-10">
                    <input 
                           type="number" 
                           name="str" 
                           class="form-control" 
                           id="inputSTR" 
                           placeholder="STR"
                           max="9999999999999999"
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label for="shift" class="col-sm-2 col-form-label">Shift</label>
                <div class="col-sm-2">
                    <select name="gaji" class="form-control" id="inputShift" required>
                        <option value="Pagi" selected>Pagi</option>
                        <option value="Siang">Siang</option>
                        <option value="Malam">Malam</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
                <div class="col-sm-10">
                    <input type="number" name="gaji" class="form-control" id="inputGaji" placeholder="Gaji" required>
                </div>
            </div>
            <button 
                    type="submit" 
                    name="btnTambahDokter"
                    class="btn btn-primer mt-3">Tambah Dokter</button>
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