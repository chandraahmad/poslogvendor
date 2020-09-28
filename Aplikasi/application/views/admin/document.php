          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Dokumen Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($dokumen->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_setuju<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-success btn-flat"><i class="fas fa-edit"></i> Setujui</a> <a data-toggle="modal" data-target="#modal_hapus<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- ============ MODAL SETUJU =============== -->
    <?php
        foreach($dokumen->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
        ?>
        <div class="modal fade" id="modal_setuju<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_setuju">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
                    <button class="btn btn-info">Setuju</button>
                </div>
            </form>
            </div>
            </div>
        </div>
 
    <?php endforeach;?>
    <!--END MODAL SETUJU-->

    <!-- ============ MODAL HAPUS =============== -->
    <?php
        foreach($dokumen->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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

          