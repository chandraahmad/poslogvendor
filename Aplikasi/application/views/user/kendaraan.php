<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Asset Kendaraan</h1>
          
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
                      <th>Vendor</th>
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
                      <th>Vendor</th>
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
                      <td><?php echo $vehicle_brand;?></td>
                      <td><?php echo $vehicle_qty;?></td>
                      <td><?php echo $vehicle_year;?></td>
                      <td><?php echo $type;?></td>
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_edit<?php echo $vehicle_id; ?>" style="color: white;" class="btn btn-sm btn-warning btn-flat"><i class="fas fa-edit"></i> Edit</a> <a href="<?= base_url('index.php/user/main/hapus_kendaraan/' . $vehicle_id); ?>" style="color: white;" class="btn btn-sm btn-info btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
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
            <form action="<?php echo base_url(). 'index.php/user/main/add_kendaraan'; ?>" method="post">
                <div class="modal-body">
 
                <div class="form-group">
                    <label for="vehicle_type">Jenis Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" placeholder="Jenis Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_brand">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_brand" name="vehicle_brand" placeholder="Merk Kendaraan">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="vehicle_qty">Quantity</label>
                        <input type="text" class="form-control" id="vehicle_qty" name="vehicle_qty" placeholder="Quantity">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="vehicle_year">Tahun</label>
                      <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" placeholder="Tahun">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Tipe Kendaraan</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipe Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_payload">Payload Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_payload" name="vehicle_payload" placeholder="Payload Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_status">Status Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_status" name="vehicle_status" placeholder="Status Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_history">Service History Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_history" name="vehicle_history" placeholder="Service History Kendaraan">
                </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <!--END MODAL ADD-->

    <!-- ============ MODAL EDIT =============== -->
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
          $vehicle_payload=$i['vehicle_payload'];
          $vehicle_status=$i['vehicle_status'];
          $vehicle_history=$i['vehicle_history'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $vehicle_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_edit">Edit Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/user/main/edit_kendaraan'; ?>" method="post">
                <div class="modal-body">
                <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" value="<?php echo $vehicle_id;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <div class="form-group">
                    <label for="vendor_name">Nama Vendor</label>
                    <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" readonly>
                </div>
                <div class="form-group">
                    <label for="vehicle_type">Jenis Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" value="<?php echo $vehicle_type;?>" placeholder="Jenis Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_brand">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_brand" name="vehicle_brand" value="<?php echo $vehicle_brand;?>" placeholder="Merk Kendaraan">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="vehicle_qty">Quantity</label>
                        <input type="text" class="form-control" id="vehicle_qty" name="vehicle_qty" value="<?php echo $vehicle_qty;?>" placeholder="Quantity">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="vehicle_year">Tahun</label>
                      <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" value="<?php echo $vehicle_year;?>" placeholder="Tahun">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Tipe Kendaraan</label>
                    <input type="text" class="form-control" id="type" name="type" value="<?php echo $type;?>" placeholder="Tipe Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_payload">Payload Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_payload" name="vehicle_payload" value="<?php echo $vehicle_payload;?>" placeholder="Payload Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_status">Status Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_status" name="vehicle_status" value="<?php echo $vehicle_status;?>" placeholder="Status Kendaraan">
                </div>
                <div class="form-group">
                    <label for="vehicle_history">Service History Kendaraan</label>
                    <input type="text" class="form-control" id="vehicle_history" name="vehicle_history" value="<?php echo $vehicle_history;?>" placeholder="Service History Kendaraan">
                </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
 
    <?php endforeach;?>
    <!--END MODAL EDIT-->

    

          
