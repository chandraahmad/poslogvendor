<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Sertifikasi/Penghargaan Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Sertifikasi/Penghargaan</th>
                      <th>Tahun</th>
                      <th>Nomor Sertifikasi/Penghargaan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Sertifikasi/Penghargaan</th>
                      <th>Tahun</th>
                      <th>Nomor Sertifikasi/Penghargaan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
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
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $awards_type;?></td>
                      <td><?php echo $awards_year;?></td>
                      <td><?php echo $awards_num;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus<?php echo $awards_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/awards/<?php echo $awards_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- ============ MODAL HAPUS =============== -->
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
        <div class="modal fade" id="modal_hapus<?php echo $awards_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_awards'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="awards_id" name="awards_id" value="<?php echo $awards_id;?>" hidden="true">
                <input type="text" class="form-control" id="awards_type" name="awards_type" value="<?php echo $awards_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus sertifikasi/penghargaan <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL HAPUS-->

          