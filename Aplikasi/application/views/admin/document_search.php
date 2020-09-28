          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cari nama perusahaan</h6>
            </div>
            <div class="card-body">
                <?php if (isset($msg) || validation_errors() !== '') : ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?= validation_errors(); ?>
                    <?= isset($msg) ? $msg : ''; ?>
                </div>
                <?php endif; ?>
                <form action="<?php echo base_url(). 'index.php/admin/main/cari_dokumen'; ?>" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select id="vendor_id" name="vendor_id" class="form-control selectpicker" data-live-search="true" data-header="Nama Perusahaan">
                                <option selected disabled>Pilih</option>
                                <?php foreach ($vendor as $row) : ?>
                                    <option value="<?php echo $row->vendor_id; ?>"><?php echo $row->vendor_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Cari</button>
                </form>
            </div>
          </div>