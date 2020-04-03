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
        <link rel="stylesheet" href="<?= base_url('assets/css/beranda.css') ?>">
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
                    <button class="btn btn-logout rounded-0">Logout</button>
                </li>
                
                <li 
                    class="topnav-right"
                    id="link-2">
                    <a href="#layanan">Layanan</a>
                </li>
                <li 
                    class="topnav-right"
                    id="link-3">
                    <a href="#pasien">Pasien</a>
                </li>
                <li 
                    class="topnav-right"
                    id="link-4">
                    <a href="#dokter">Dokter</a>
                </li>
                
                <li 
                    class="topnav-right"
                    id="link-5">
                    <a href="#" class="link-active">Beranda</a>
                </li>
                
                <li class="dropdownIcon" id="intentDropDown"><a href="javascript:void(0)">&#9776;</a></li>
            </ul>
        </nav>
        <h4 id="h4" class="h4">Daftar Pemeriksaan</h4>
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script src="<?= base_url('assets/css/bootstrap/js/bootstrap.js') ?>"></script>
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
                if ($(window).width() < 681) {
                    $("#link-5").html(valLink1);
                    $("#link-4").html(valLink2);
                    $("#link-2").html(valLink4);
                    $("#link-1").html(valLink5);
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
            
            function jqueryResize() {
                var width = $(window).width();
                $('.h4').html(width);
                if (width < 681) {
                    $("#link-5").html(valLink1);
                    $("#link-4").html(valLink2);
                    $("#link-2").html(valLink4);
                    $("#link-1").html(valLink5);
                }
                else {
                    $("#link-5").html(valLink5);
                    $("#link-4").html(valLink4);
                    $("#link-2").html(valLink2);
                    $("#link-1").html(valLink1);
                }
            }

            $(window).on('resize', jqueryResize);
        </script>
    </body>
</html>
