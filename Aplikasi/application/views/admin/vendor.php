<h1 class="h3 mb-0 text-gray-800">Data Vendor</h1>

          <!-- Log -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Data Calon Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Bidang Usaha</th>
                      <th class="text-center">Tahun Berdiri</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Telepon</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Bidang Usaha</th>
                      <th class="text-center">Tahun Berdiri</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Telepon</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($vendor->result_array() as $i):
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $business_field_name=$i['business_field_name'];
                      $founding_date=$i['founding_date'];
                      $vendor_email=$i['vendor_email']; 
                      $vendor_phone=$i['vendor_phone'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $business_field_name;?></td>
                      <td><?php echo $founding_date;?></td>
                      <td><?php echo $vendor_email;?></td>
                      <td><?php echo $vendor_phone;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_setuju<?php echo $vendor_id; ?>" style="color: white;" class="btn btn-sm btn-success btn-flat"><i class="fas fa-edit"></i> Setujui</a> <a data-toggle="modal" data-target="#modal_hapus<?php echo $vendor_id; ?>" style="color: white;" class="btn btn-sm btn-info btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- ============ MODAL SETUJU =============== -->
    <?php
        foreach($vendor->result_array() as $i):
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
        ?>
        <div class="modal fade" id="modal_setuju<?php echo $vendor_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_setuju">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_vendor'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui <?php echo $vendor_name;?> ?</h6>
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
        foreach($vendor->result_array() as $i):
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $vendor_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_vendor'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus <?php echo $vendor_name;?> ?</h6>
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

          