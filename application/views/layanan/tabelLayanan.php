<?php //membuat tabel
    $tableTemplate = array(
        'table_open' => '<table class="table table-bordered" id="tabel">',
        'thead_open' => '<thead>'
    );
    $this->table->set_template($tableTemplate);
    $this->table->set_heading('No','ID','Nama Layanan','Tarif','Aksi');
    $i = 0;
    $ic_edit_loc = base_url('assets/icon/ic_edit.png');
    $ic_garbage_can_loc = base_url('assets/icon/ic_trash.png');
    $this->load->model('layananModel');
    $ListLayanan = $this->layananModel->getListLayanan();
    foreach($ListLayanan as $layanan) {
        $i = $i + 1;
        $this->table->add_row(
            $layanan[0],
            $layanan[1],
            $layanan[2],
            $layanan[3],
            '
                <img 
                     class="ic-aksi" 
                     src="'.$ic_edit_loc.'"
                     data-tippy-content="Edit Layanan"
                     data-toggle="modal" data-target="#ModalEditLayanan"
                     data-id="'.$layanan[1].'"
                     data-nama= "'.$layanan[2].'"
                     data-tarif="'.$layanan[3].'">
                <img 
                     class="ic-aksi" 
                     src="'.$ic_garbage_can_loc.'"
                     data-tippy-content="Hapus Layanan"">
            '
        );
    }
    echo $this->table->generate();
?>