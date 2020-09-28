<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Asset Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Asset</th>
                      <th>Qty</th>
                      <th>Status Kepemilikan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Asset</th>
                      <th>Qty</th>
                      <th>Status Kepemilikan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($general->result_array() as $i):
                      $general_id=$i['general_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $general_type=$i['general_type'];
                      $general_qty=$i['general_qty'];
                      $general_status=$i['general_status'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $general_type;?></td>
                      <td><?php echo $general_qty;?></td>
                      <td><?php echo $general_status;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus<?php echo $vehicle_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- ============ MODAL HAPUS =============== -->
    <?php
        foreach($general->result_array() as $i):
            $general_id=$i['general_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $general_type=$i['general_type'];
            $general_qty=$i['general_qty'];
            $general_status=$i['general_status'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $general_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_general'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="general_id" name="general_id" value="<?php echo $general_id;?>" hidden="true">
                <input type="text" class="form-control" id="general_type" name="general_type" value="<?php echo $general_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus asset <?php echo $vendor_name;?> ?</h6>
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

          