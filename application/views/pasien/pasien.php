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
        <link rel="stylesheet" href="<?= base_url('assets/css/pasien.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        
        <style>
            .FAB {
                position: fixed;
                right: 30px;
                bottom: 30px;
                text-decoration: none;
                background-color: #A66C20;
                color: white;
                padding: 12px 18px;
                border-radius: 50%;
                font-size: 25px;
                width: 50px;
                height: 50px;
                z-index: 2;
            }

            .FAB:hover {
                background-color: #c78834;
                color: white;
                text-decoration: none;
            }
            
            .page-footer {
                z-index: 1;
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
                    <a href="#layanan">Layanan</a>
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
            <button class="btn btn-primer ml-auto" id="btnInputPasien"> Tambah Pasien </button>
        </div>
        
        <div class="tabel" style="overflow-x: auto; margin-top: 20px; margin-bottom: 70px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>3328112306000007</td>
                        <td>Duta Dutaa</td>
                        <td>Bumijawa</td>
                        <td>082321345764</td>
                        <td>Peternak</td>
                        <td>
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_edit_account.png') ?>"
                                     data-tippy-content="Edit Pasien">
                                <img 
                                     class="ic-aksi" 
                                     src="<?= base_url('assets/icon/ic_delete_account.png') ?>"
                                     data-tippy-content="Hapus Pasien">
                        </td>
                    </tr>
            </table>    
        </div>
        
        <a href="#" class="FAB p" id="FAB">
            +
        </a>
        
        <footer class="page-footer text-center py-3 w-100 fixed-bottom" 
                style="background-color: #E1D9D9;">
            © 2020 Kintan Dental • All rights reserved • Love from Tegal
        </footer>
        
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script>
            var valLink1;
            var valLink2;
            var valLink3;
            var valLink4;
            $(document).ready(function(){
                
                valLink1 = $('#link-1').html();
                valLink2 = $('#link-2').html();
                valLink4 = $('#link-4').html();
                valLink5 = $('#link-5').html();
                if ($(window).width() < 678) {
                    $("#link-5").html(valLink1);
                    $("#link-4").html(valLink2);
                    $("#link-2").html(valLink4);
                    $("#link-1").html(valLink5);
                    $("#btnInputPasien").hide();
                }
                else {
                    $('#FAB').hide();
                }
                
                $('#intentDropDown').click(function(){
                    var kelas = $('#dropdownClick').attr('class');
                    if (kelas === 'topnav') {
                        $('#dropdownClick').attr('class','topnav responsive');
                    }
                    else {
                        $('#dropdownClick').attr('class','topnav');
                    }
                });
                
            });
            
            tippy('.ic-aksi',{
                content : 'Tooltip',
                placement : 'bottom'
            });
            
            function logout() {
                window.location.href = 'http://localhost/kintandental/index.php/logout/index';
            }
            
            function jqueryResize() {
                var width = $(window).width();
                if (width < 678) {
                    $("#link-5").html(valLink1);
                    $("#link-4").html(valLink2);
                    $("#link-2").html(valLink4);
                    $("#link-1").html(valLink5);
                    $('#FAB').show();
                    $('#btnInputPasien').hide();
                }
                else {
                    $("#link-5").html(valLink5);
                    $("#link-4").html(valLink4);
                    $("#link-2").html(valLink2);
                    $("#link-1").html(valLink1);
                    $('#FAB').hide();
                    $('#btnInputPasien').show();
                }
            }

            $(window).on('resize', jqueryResize);
        </script>
    </body>
</html>