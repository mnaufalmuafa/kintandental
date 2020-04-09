function intentToTambahPasien() {
    window.location.href="http://localhost/kintandental/index.php/pasien/tambahPasien";
}
$(document).ready(function(){
    $('#tabel').DataTable();
    $('.ic-aksi-edit').on('click',function(){
        var url = 'http://localhost/kintandental/index.php/pasien/editPasien/';
        var id = $(this).attr('data-id');
        $(location).attr('href',url+id);
    });
});