<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Layanan - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/view/layanan.css') ?>">
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
                    <a class="link-active" href="#">Layanan</a>
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
        
        <div class="container_satu w-100 d-flex" >
            <h4>Daftar Layanan</h4>
            <button 
                    class="btn btn-primer ml-auto btn-collapsed" id="btnInputLayanan"
                    data-toggle="modal" data-target="#ModalInputLayanan"> Tambah Layanan </button>
        </div>
        
        <div 
             class="modal fade" id="ModalInputLayanan" 
             tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                <input type="text" class="form-control input-nama" id="inputNama">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tarif</label>
                                <input type="number" class="form-control input-tarif" id="inputTarif">
                            </div>
                             <button type="submit" class="btn btn-primer">Tambah Layanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tabel" style="overflow-x: auto; margin-top: 20px; margin-bottom: 70px;">
            <table class="table table-bordered" id="tabel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Layanan</th>
                        <th>Tarif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Cabut Gigi</td>
                        <td>80.000</td>
                        <td>
                            <img 
                                 class="ic-aksi" 
                                 src="<?= base_url('assets/icon/ic_edit.png') ?>"
                                 data-tippy-content="Edit Layanan"
                                 data-toggle="modal" data-target="#ModalEditLayanan"
                                 data-id="1"
                                 data-nama= "Cabut Gigi"
                                 data-tarif="80.000">
                            <img 
                                 class="ic-aksi" 
                                 src="<?= base_url('assets/icon/ic_trash.png') ?>"
                                 data-tippy-content="Hapus Layanan">
                        </td>
                    </tr>
            </table>    
        </div>
        
        <div 
             class="modal fade" id="ModalEditLayanan" 
             tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label" >Id</label>
                                <input type="text" class="form-control input-nama" id="inputId" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tarif</label>
                                <input type="number" class="form-control" id="inputTarif">
                            </div>
                             <button type="submit" class="btn btn-primer">Edit Layanan</button>
                        </form>
                    </div>
                </div>
            </div>
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
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script src="<?= base_url('assets/js/controller/FAB.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/Navbar.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/btnCollapsed.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/logout.js') ?>"></script>
        <script src="<?= base_url('assets/js/controller/tooltipIcAksi.js') ?>"></script>
        <script src="<?= base_url('assets/js/viewController/layanan.js') ?>"></script>
    </body>
</html>