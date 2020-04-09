$(document).ready(function(){
    $('#tabel').DataTable();
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

});