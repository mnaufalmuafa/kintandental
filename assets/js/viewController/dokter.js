function intentToTambahDokter() {
    window.location.href = 'http://localhost/kintandental/index.php/dokter/tambahDokter';
}
$(document).ready(function(){
    $('#tabel').DataTable();
    $('.ic-aksi-edit').on('click',function(){
        var url = 'http://localhost/kintandental/index.php/dokter/editDokter/';
        var id = $(this).attr('data-id');
        $(location).attr('href',url+id);
    });
});