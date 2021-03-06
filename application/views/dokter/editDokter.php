<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Dokter - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/elemen/breadcrumb.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/editDokter.css') ?>">
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
            <li class="active">Edit Dokter</li>
        </ul>
        
        <h3>Edit Dokter</h3>
        
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
                           value="<?= $dokter['id'] ?>"
                           required readonly disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input 
                           type="text" 
                           value = "<?= $dokter['nama'] ?>"
                           name="nama" class="form-control disabled" id="inputNama" placeholder="Nama" 
                           required readonly disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="str" class="col-sm-2 col-form-label">No STR</label>
                <div class="col-sm-10">
                    <input 
                           type="number" 
                           name="str"
                           value = "<?= $dokter['str'] ?>" 
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
                    <select name="shift" class="form-control" id="inputShift" required>
                        <option value="Pagi"<?php if ($dokter["shift"]=='Pagi') {
                            echo "selected";
                        } ?>>Pagi</option>
                        <option value="Siang"<?php if ($dokter["shift"]=='Siang') {
                            echo "selected";
                        } ?>>Siang</option>
                        <option value="Malam"<?php if ($dokter["shift"]=='Malam') {
                            echo "selected";
                        } ?>>Malam</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
                <div class="col-sm-10">
                    <input type="number" name="gaji" class="form-control" id="inputGaji" placeholder="Gaji" required value="<?= $dokter['gaji'] ?>">
                </div>
            </div>
            <button 
                    type="submit" 
                    name="btnEditDokter"
                    class="btn btn-primer mb-5">Edit Dokter</button>
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
