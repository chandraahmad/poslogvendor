<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Form Isian Vendor</h1>
          
          <!-- Kendaraan -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h4 class="font-weight-bold text-primary">Kendaraan</h4> -->
              <a data-toggle="modal" data-target="#modal_add_new" class="btn btn-sm btn-success float-right" style="color: white;">
                <i class="fas fa-plus"></i>
                Tambah
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Form Isian</th>
                      <th>File Form Isian</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Form Isian</th>
                      <th>File Form Isian</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($form->result_array() as $i):
                      $form_id=$i['form_id'];
                      $form_name=$i['form_name'];
                      $form_file=$i['form_file'];
                    ?>
                    <tr>
                      <td><?php echo $form_name;?></td>
                      <td><?php echo $form_file;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_edit<?php echo $form_id; ?>" style="color: white;" class="btn btn-sm btn-warning btn-flat"><i class="fas fa-edit"></i> Edit</a> <a data-toggle="modal" data-target="#modal_hapus<?php echo $form_id; ?>" style="color: white;" class="btn btn-sm btn-info btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_add_new">Tambah Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>                
            </div>
            <form id="modal-add-new" method="post" enctype="multipart/form-data">
                <div class="modal-body">
 
                <div class="form-group">
                    <label for="form_name">Nama Form Isian</label>
                    <select id="form_name" name="form_name" class="form-control selectpicker" data-live-search="true" data-header="Pilih Nama Form Isian">
                        <option selected disabled>Pilih</option>
                        <option>Surat Permohonan Menjadi Mitra</option>
                        <option>Surat Pernyataan</option>
                        <option>Surat Pakta Integritas</option>
                        <option>Surat Pernyataan Tidak Dalam Pengawasan Pengadilan</option>
                        <option>Surat Pernyataan Memiliki Kemampuan Fasilitas</option>
                        <option>Formulir CSMS</option>
                    </select>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="form_file" name="form_file">
                    <label class="custom-file-label" for="form_file">Pilih file</label>
                    <small id="form_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" type="submit">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <!--END MODAL ADD-->

    <!-- ============ MODAL EDIT =============== -->
    <?php
        foreach($form->result_array() as $i):
            $form_id=$i['form_id'];
            $form_name=$i['form_name'];
            $form_file=$i['form_file'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $form_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_edit">Edit Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form id="modal-edit" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="text" class="form-control" id="form_id" name="form_id" value="<?php echo $form_id;?>" hidden="true">
                <div class="form-group">
                    <label for="awards_type">Nama Form Isian</label>
                    <input type="text" class="form-control" id="form_name" name="form_name" value="<?php echo $form_name;?>" readonly="true">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="form_file" name="form_file" value="<?php echo $form_file;?>">
                    <label class="custom-file-label" for="form_file">Pilih file</label>
                    <small id="form_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" type="submit">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
 
    <?php endforeach;?>
    <!--END MODAL EDIT-->

    <!-- ============ MODAL Hapus =============== -->
    <?php
        foreach($form->result_array() as $i):
            $form_id=$i['form_id'];
            $form_name=$i['form_name'];
            $form_file=$i['form_file'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $form_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Hapus Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_form'; ?>" method="post">
                <div class="modal-body">
                <input type="text" class="form-control" id="form_id" name="form_id" value="<?php echo $form_id;?>" hidden="true">
                <input type="text" class="form-control" id="form_name" name="form_name" value="<?php echo $form_name;?>" hidden="true">
                <input type="text" class="form-control" id="form_file" name="form_file" value="<?php echo $form_file;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus form <?php echo $form_name;?> ?</h6>

                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
                    <button class="btn btn-info">Yakin</button>
                </div>
            </form>
            </div>
            </div>
        </div>
 
    <?php endforeach;?>
    <!--END MODAL Hapus-->

    

          
