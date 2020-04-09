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
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/inputPemeriksaan.css') ?>">
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
            
            input.inputJam {
                border-color: rgba(0,0,0,0);
            }
            
            .modal-header {
                background-color: #DEB887 !important;
            }
            
            .modal-body, .modal-footer {
                background: rgba(255,228,196,0.35) !important;
            }
            
            .inputJam {
                background-color: rgba(0,0,0,0) !important;
                border-color: #C0C0C0 !important;
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
                               type="text" name="dokter" 
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
                               type="text" name="pasien" 
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
                    <input type="text" class="form-control" id="inputTanggal" placeholder="Tanggal" required readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control inputJam" id="inputJam" placeholder="Waktu pemeriksaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="layanan" class="col-sm-2 col-form-label">Layanan</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input 
                               type="text" name="layanan" 
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
                                    <tr id="dokter" data-id="1" data-nama="Drg. Kikim" >
                                        <td>1</td>
                                        <td>Drg. Kikim</td>
                                    </tr>
                                    <tr id="dokter" data-id="2" data-nama="Drg. Kakam" >
                                        <td>2</td>
                                        <td>Drg. Kakam</td>
                                    </tr>
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
                                    <tr id="pasien" data-id="1" data-nama="Duta" >
                                        <td>1</td>
                                        <td>Duta</td>
                                    </tr>
                                    <tr id="pasien" data-id="2" data-nama="Dutaa" >
                                        <td>2</td>
                                        <td>Dutaa</td>
                                    </tr>
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
                                    <tr id="layanan" data-id="1" data-nama="Cabut Gigi" >
                                        <td>1</td>
                                        <td>Cabut Gigi</td>
                                    </tr>
                                    <tr id="layanan" data-id="2" data-nama="Tambal Gigi" >
                                        <td>2</td>
                                        <td>Tambal Gigi</td>
                                    </tr>
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
        <script>
            $(document).ready(function(){
                var d = new Date();
                var tanggal = d.getDate();
                var bulan = d.getMonth()+1;
                var tahun = d.getFullYear();
                $('#inputTanggal').val(tanggal.toString()+' - '+bulan.toString()+' - '+tahun);
                $(document).on('click', '#dokter', function (e){
                    document.getElementById("inputDokter").value = $(this).attr('data-id')+ ' - '+$(this).attr('data-nama');
                    $('#modalDokter').modal('hide');
                });
                $(document).on('click', '#pasien', function (e){
                    document.getElementById("inputPasien").value = $(this).attr('data-id')+ ' - '+$(this).attr('data-nama');
                    $('#modalPasien').modal('hide');
                });
                $(document).on('click', '#layanan', function (e){
                    document.getElementById("inputLayanan").value = $(this).attr('data-id')+ ' - '+$(this).attr('data-nama');
                    $('#modalLayanan').modal('hide');
                });
            });
        </script>
    </body>
</html>