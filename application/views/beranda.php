<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beranda - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/beranda.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/carousel.css') ?>">
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
                    <a href="#" class="link-active">Beranda</a>
                </li>
                
                <li class="dropdownIcon" id="intentDropDown"><a href="javascript:void(0)">&#9776;</a></li>
            </ul>
        </nav>
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 bg" src="<?= base_url('assets/img/bg_carousel.png') ?>" alt="First slide">
                    <img class="icon" src="<?= base_url('assets/icon/ic_pemeriksaan.png') ?>">
                    <h1 class="indikatorBanyak">0</h1>
                    <h1 class="item-carousel-ket">Pemeriksaan</h1>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 bg" src="<?= base_url('assets/img/bg_carousel.png') ?>" alt="Second slide">
                    <img class="icon" src="<?= base_url('assets/icon/ic_dokter.png') ?>">
                    <h1 class="indikatorBanyak">0</h1>
                    <h1 class="item-carousel-ket">Dokter Gigi</h1>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 bg" src="<?= base_url('assets/img/bg_carousel.png') ?>" alt="Third slide">
                    <img class="icon" src="<?= base_url('assets/icon/ic_pasien.png') ?>">
                    <h1 class="indikatorBanyak">0</h1>
                    <h1 class="item-carousel-ket">Pasien</h1>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 bg" src="<?= base_url('assets/img/bg_carousel.png') ?>" alt="Third slide">
                    <img class="icon" src="<?= base_url('assets/icon/ic_layanan.png') ?>">
                    <h1 class="indikatorBanyak">0</h1>
                    <h1 class="item-carousel-ket">Layanan</h1>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div class="container_satu w-100 d-flex" >
            <h4>Daftar Pemeriksaan</h4>
            <button class="btn btn-primer ml-auto btn-collapsed" id="btnInputPemeriksaan"> Input Pemeriksaan </button>
        </div>
        
        <a href="http://localhost/kintandental/index.php/beranda/inputPemeriksaan" class="FAB" id="FAB">
            +
        </a>
        
        <div class="tabel" style="overflow-x: auto; margin-top: 20px;">
            <table class="table table-bordered p-relative" id="tabel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dokter</th>
                        <th>Pasien</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Layanan</th>
                        <th>Tarif</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Drg. Kintan Rahma</td>
                        <td>Duta Dutaa</td>
                        <td>23 September 2020</td>
                        <td>12:12</td>
                        <td>Pembersihan Karang Gigi</td>
                        <td>500.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Drg. Kintan Rahma</td>
                        <td>Duta Dutaa</td>
                        <td>24 September 2020</td>
                        <td>12:12</td>
                        <td>Pembersihan Karang Gigi</td>
                        <td>500.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Drg. Kintan Rahma</td>
                        <td>Duta Dutaa</td>
                        <td>25 September 2020</td>
                        <td>12:12</td>
                        <td>Pembersihan Karang Gigi</td>
                        <td>500.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <footer class="footer-copyright text-center py-3 mt-5">
            © 2020 Kintan Dental • All rights reserved • Love from Tegal
        </footer>
        
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script src="<?= base_url('assets/js/controller/FAB.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/Navbar.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/btnCollapsed.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/logout.js') ?>"></script>
        <script src="<?= base_url('assets/js/viewController/beranda.js') ?>"></script>
    </body>
</html>
