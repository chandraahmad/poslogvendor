<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Kendaraan Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Kendaraan</th>
                      <th>Merk</th>
                      <th>Qty</th>
                      <th>Tahun</th>
                      <th>Type</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Kendaraan</th>
                      <th>Merk</th>
                      <th>Qty</th>
                      <th>Tahun</th>
                      <th>Type</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($kendaraan->result_array() as $i):
                      $vehicle_id=$i['vehicle_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $vehicle_type=$i['vehicle_type'];
                      $vehicle_brand=$i['vehicle_brand'];
                      $vehicle_qty=$i['vehicle_qty'];
                      $vehicle_year=$i['vehicle_year'];
                      $type=$i['type'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $vehicle_type;?></td>
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
        foreach($kendaraan->result_array() as $i):
            $vehicle_id=$i['vehicle_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vehicle_type=$i['vehicle_type'];
            $vehicle_brand=$i['vehicle_brand'];
            $vehicle_qty=$i['vehicle_qty'];
            $vehicle_year=$i['vehicle_year'];
            $type=$i['type'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $vehicle_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_kendaraan'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" value="<?php echo $vehicle_id;?>" hidden="true">
                <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" value="<?php echo $vehicle_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus kendaraan <?php echo $vendor_name;?> ?</h6>
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

          