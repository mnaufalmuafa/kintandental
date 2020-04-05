<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Kintan Dental</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:300,400|Sahitya&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
    </head>
    <body>
        <div class="container-custom w-100">
            <div class="row">
                <div class="col-6 left-side" id="left-side">
                    <div class="left-side-content w-100">
                        <h1>Kintan Dental</h1>
                        <h4 class="font-weight-light"> Sistem Informasi Kintan Dental</h4>
                    </div>
                </div>
                <div class="col-6 right-side" id="right-side">
                    <form class="form" method="post">
                        <h3 class="text-center">Login</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button class="btn btn-login w-100" type="submit" name="btnLogin">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
        <script>
            var leftSideVal;
            var leftSideClass;
            var rightSideClass;
            $(document).ready(function(){
                leftSideVal = $('.left-side').html();
                leftSideClass = $('.left-side').attr('class');
                rightSideClass = $('.right-side').attr('class');
                
                if ($(window).width() < 681) {
                    $('.left-side').html('');
                    $('.left-side').attr('class','d-none');
                    $('#right-side').attr('class','col-12');
                }
            });
            function jqueryResize() {
                var width = $(window).width();
                if (width < 681) {
                    $('.left-side').html('');
                    $('.left-side').attr('class','d-none');
                    $('#right-side').attr('class','col-12');
                }
                else {
                    console.log(leftSideClass);
                    $('#left-side').attr('class',leftSideClass+' d-inline');
                    $('.left-side').html(leftSideVal);
                    $('#right-side').attr('class',rightSideClass);
                }
            }

            $(window).on('resize', jqueryResize);
        </script>
    </body>
</html>