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
                        <form action="" method="post" id="addLayanan">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                <input type="text" class="form-control input-nama" name="nama" id="inputNamaI">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tarif</label>
                                <input type="number" class="form-control input-tarif" name="tarif" id="inputTarifI">
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
                        <th>Id</th>
                        <th>Nama Layanan</th>
                        <th>Tarif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tbody">
<!--                    -->
                </tbody>
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
                        <form action="" method="post" id="editLayanan">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label" >Id</label>
                                <input type="text" class="form-control input-nama" name="id" id="inputId" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                <input type="text" class="form-control" name="nama" id="inputNama">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tarif</label>
                                <input type="number" class="form-control" name="tarif" id="inputTarif">
                            </div>
                             <button type="submit" class="btn btn-primer">Edit Layanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <a href="#" class="FAB p" id="FAB" data-toggle="modal" data-target="#ModalInputLayanan">
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
        <script>
            $('#ModalEditLayanan').on('show.bs.modal',function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var nama = button.data('nama');
                var tarif = button.data('tarif');

                var modal = $(this);
                modal.find('#inputId').val(id);
                modal.find('#inputNama').val(nama);
                modal.find('#inputTarif').val(tarif);
            });
            
            function getData() {
                var header = '<table class="table table-bordered" id="tabel">';
                var thead = '<thead><tr>';
                var heading = '<th>No</th><th>Id</th><th>Nama Layanan</th><th>Tarif</th><th>Edit</th><th>Hapus</th>';
                var closeThead = '</tr></thead>';
                var closeTable = '</table>';
                $.ajax({
                    type : 'POST',
                    url : 'layanan/getDataLayanan',
                    dataType : 'JSON',
                    success : function(data) {
                        var baris = '';
                        for (let i = 0; i < data.length; i++){
                            baris += "<tr>" +
                                "<td>"+(i+1)+"</td>"+
                                "<td>"+data[i].id+"</td>"+
                                "<td>"+data[i].nama+"</td>"+
                                "<td>"+data[i].tarif+"</td>"+
                                "<td>"+
                                "<img class=\"ic-aksi aksi-edit\" src=\"<?= base_url('assets/icon/ic_edit.png') ?>\" data-tippy-content=\"Edit Layanan\" data-toggle=\"modal\" data-target=\"#ModalEditLayanan\" data-id= "+
                                '"'+data[i].id+'"'+
                                "data-nama = "+
                                '"'+data[i].nama+'"'+
                                "data-tarif = "+
                                '"'+data[i].tarif+'"'+
                                ">"+
                                "<img class=\"ic-aksi aksi-hapus\" src=\"<?= base_url('assets/icon/ic_trash.png') ?>\""+
                                "data-id = "+ "\"" + data[i].id + "\" " +
                                "data-nama = "+ "\"" + data[i].nama + "\"" +
                                ">"+
                                "</td>"+
                                "</tr>";
                        }
                        $('#tbody').html(baris);
                        tippy('.aksi-edit',{
                            content : "Edit Layanan",
                            placement : 'bottom'
                        });
                        tippy('.aksi-hapus',{
                            content : "Hapus Layanan",
                            placement : 'bottom'
                        });
                        
                        $('.aksi-hapus').click(function(){
                            var id = $(this).attr('data-id');
                            var confirm_ = confirm('Apakah anda yakin ingin menghapus '+$(this).attr('data-nama'));
                            if (confirm_) {
                                var id = $(this).attr('data-id');
                                $.ajax({
                                    type : 'POST',
                                    url : 'layanan/hapus',
                                    data : {
                                        id : id
                                    },
                                    dataType : 'JSON',
                                    success : function() {
                                        console.log('sukses');
                                        getData();
                                    },
                                    error : function() {
                                        console.log('gagal');
                                        getData();
                                    }
                                });
                            }
                            else {
                                console.log('tidak hapus');
                            }
                        });
            
                    }
                });
            }
            
            $(document).ready(function(){
                getData();
            });
            
            $('#addLayanan').submit(function(e){
                e.preventDefault();
                $('#ModalInputLayanan').modal('hide');
                var nama = $('#inputNamaI').val();
                var tarif = $('#inputTarifI').val();
                var dataForm = $(this);
                $.ajax({
                    url : 'layanan/addLayanan',
                    type : 'POST',
                    data: dataForm.serialize(),
                    dataType : 'JSON',
                    error: function(data) {
                        getData();
                        $('#addLayanan').trigger("reset");
                    },
                    success : function(data) {
                        getData();
                        $('#addLayanan').trigger("reset");
                    } 
                });
            });
            
            $('#editLayanan').submit(function(e){
                e.preventDefault();
                $('#ModalEditLayanan').modal('hide');
                var id = $('#inputId').val();
                var nama = $('#inputNama').val();
                var tarif = $('#inputTarif').val();
                var dataForm = $(this);
                console.log('ss');
                $.ajax({
                    url : 'layanan/editLayanan',
                    type : 'POST',
                    data: {
                        id : id,
                        nama : nama,
                        tarif : tarif
                    },
                    dataType : 'JSON',
                    error: function(request) {
                        getData();
                        alert(request.responseText);
                    },
                    success : function(data) {
                        getData();
                    } 
                });
            });
        </script>
    </body>
</html>