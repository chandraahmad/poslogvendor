<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Asset General</h1>
          
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
                      <th>Jenis Asset</th>
                      <th>Qty</th>
                      <th>Status Kepemilikan</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Vendor</th>
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
                      <td class="text-center"><a data-toggle="modal" data-target="#modal_edit<?php echo $general_id; ?>" style="color: white;" class="btn btn-sm btn-warning btn-flat"><i class="fas fa-edit"></i> Edit</a> <a data-toggle="modal" data-target="#modal_hapus<?php echo $general_id; ?>" style="color: white;" class="btn btn-sm btn-info btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a></td>
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
            <form action="<?php echo base_url(). 'index.php/user/main/add_general'; ?>" method="post">
                <div class="modal-body">
 
                <div class="form-group">
                    <label for="general_type">Jenis Asset</label>
                    <input type="text" class="form-control" id="general_type" name="general_type" placeholder="Jenis Asset">
                </div>
                <div class="form-group">
                    <label for="general_qty">Quantity</label>
                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="general_qty" name="general_qty" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="general_status">Status Kepemilikan</label>
                    <input type="text" class="form-control" id="general_status" name="general_status" placeholder="Status Kepemilikan">
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
        foreach($general->result_array() as $i):
            $general_id=$i['general_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $general_type=$i['general_type'];
            $general_qty=$i['general_qty'];
            $general_status=$i['general_status'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $general_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_edit">Edit Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/user/main/edit_general'; ?>" method="post">
                <div class="modal-body">
                <input type="text" class="form-control" id="general_id" name="general_id" value="<?php echo $general_id;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <div class="form-group">
                    <label for="vendor_name">Nama Vendor</label>
                    <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" readonly>
                </div>
                <div class="form-group">
                    <label for="general_type">Jenis Asset</label>
                    <input type="text" class="form-control" id="general_type" name="general_type" value="<?php echo $general_type;?>" placeholder="Jenis Asset">
                </div>
                <div class="form-group">
                    <label for="general_qty">Quantity</label>
                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="general_qty" name="general_qty" value="<?php echo $general_qty;?>" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="general_status">Status Kepemilikan</label>
                    <input type="text" class="form-control" id="general_status" name="general_status" value="<?php echo $general_status;?>" placeholder="Status Kepemilikan">
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
            <form action="<?php echo base_url(). 'index.php/user/main/hapus_general'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="general_id" name="general_id" value="<?php echo $general_id;?>" hidden="true">
                <input type="text" class="form-control" id="general_type" name="general_type" value="<?php echo $general_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus asset <?php echo $general_type;?> ?</h6>
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

    

          
