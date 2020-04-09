$(document).ready(function(){
    $('#tabel').DataTable();
    $('#btnInputPemeriksaan').on('click',function(){
        $(location).attr('href','http://localhost/kintandental/index.php/beranda/inputPemeriksaan');
    });
});