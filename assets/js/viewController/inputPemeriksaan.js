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