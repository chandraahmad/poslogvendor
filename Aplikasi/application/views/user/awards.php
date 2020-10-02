<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Sertifikasi/Penghargaan</h1>
          
          <!-- Kendaraan -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h4 class="font-weight-bold text-primary">Kendaraan</h4> -->
              <a data-toggle="modal" data-target="#modal_awards" class="btn btn-sm btn-success float-right" style="color: white;">
                <i class="fas fa-plus"></i>
                Tambah
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Vendor</th>
                      <th>Jenis Sertifikasi/Penghargaan</th>
                      <th>Tahun</th>
                      <th>Nomor</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Vendor</th>
                      <th>Jenis Sertifikasi/Penghargaan</th>
                      <th>Tahun</th>
                      <th>Nomor</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($awards->result_array() as $i):
                      $awards_id=$i['awards_id'];
                      $vendor_name=$i['vendor_name'];
                      $awards_type=$i['awards_type'];
                      $awards_year=$i['awards_year'];
                      $awards_num=$i['awards_num'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $awards_type;?></td>
                      <td><?php echo $awards_year;?></td>
                      <td><?php echo $awards_num;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_edit_awards<?php echo $awards_id; ?>" style="color: white;" class="btn btn-sm btn-warning btn-flat"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('index.php/user/main/hapus_awards/' . $awards_id); ?>" style="color: white;" class="btn btn-sm btn-info btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="modal_awards" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_awards">Tambah Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>                
            </div>
            <form id="modal-awards" method="post" enctype="multipart/form-data">
                <div class="modal-body">
 
                <div class="form-group">
                    <label for="awards_type">Jenis Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_type" name="awards_type" placeholder="Jenis Sertifikasi/Penghargaan">
                </div>
                <div class="form-group">
                    <label for="awards_year">Tahun Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_year" onkeypress="return isNumberKey(event)" maxlength="4" name="awards_year" placeholder="Tahun Sertifikasi/Penghargaan">
                </div>
                <div class="form-group">
                    <label for="awards_num">Nomor Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_num" name="awards_num" placeholder="Nomor Sertifikasi/Penghargaan">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="awards_file" name="awards_file">
                    <label class="custom-file-label" for="awards_file">Pilih file</label>
                    <small id="awards_file" class="form-text text-muted">File berbentuk PDF maksimal 10MB</small>
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
        foreach($awards->result_array() as $i):
            $awards_id=$i['awards_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $awards_type=$i['awards_type'];
            $awards_year=$i['awards_year'];
            $awards_num=$i['awards_num'];
            $awards_file=$i['awards_file'];
        ?>
        <div class="modal fade" id="modal_edit_awards<?php echo $awards_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_edit_awards">Edit Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form id="modal-edit-awards" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="text" class="form-control" id="awards_id" name="awards_id" value="<?php echo $awards_id;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <div class="form-group">
                    <label for="awards_type">Jenis Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_type" name="awards_type" value="<?php echo $awards_type;?>" placeholder="Jenis Sertifikasi/Penghargaan">
                </div>
                <div class="form-group">
                    <label for="awards_year">Tahun Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_year" name="awards_year" value="<?php echo $awards_year;?>" placeholder="Tahun Sertifikasi/Penghargaan">
                </div>
                <div class="form-group">
                    <label for="awards_num">Nomor Sertifikasi/Penghargaan</label>
                    <input type="text" class="form-control" id="awards_num" name="awards_num" value="<?php echo $awards_num;?>"placeholder="Nomor Sertifikasi/Penghargaan">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="awards_file" name="awards_file" value="<?php echo $awards_file;?>">
                    <label class="custom-file-label" for="awards_file">Pilih file</label>
                    <small id="awards_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
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

    

          
