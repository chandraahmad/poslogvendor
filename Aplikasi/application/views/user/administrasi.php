<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Administrasi</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Borang administrasi vendor</h6>
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
                <form action="<?php echo base_url(). 'index.php/user/main/add_admin'; ?>" method="post">
                    <div class="form-group">
                        <label for="vendor_name">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder="Tulis nama perusahaan anda">
                    </div>
                    <div class="form-group">
                        <label for="founding_date">Tahun Didirikan</label>
                        <input type="text" class="form-control" id="founding_date" name="founding_date" placeholder="Tulis tahun perusahaan anda mulai berdiri">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Perusahaan</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Tulis alamat lengkap perusahaan anda" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="postcode">Kode Pos</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Kode Pos">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vendor_email">E-mail</label>
                            <input type="email" class="form-control" id="vendor_email" name="vendor_email" placeholder="E-mail perusahaan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="vendor_phone">Telepon</label>
                            <input type="text" class="form-control" id="vendor_phone" name="vendor_phone" placeholder="Telepon">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vendor_fax">Fax</label>
                            <input type="text" class="form-control" id="vendor_fax" name="vendor_fax" placeholder="Fax">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vendor_website">Website Perusahaan</label>
                        <input type="text" class="form-control" id="vendor_website" name="vendor_website" placeholder="Website Perusahaan">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="business_field_id">Bidang Usaha</label>
                            <select id="business_field_id" name="business_field_id" class="form-control">
                                <option selected disabled>Pilih</option>
                                <?php foreach ($business_field as $row) : ?>
                                    <option value="<?php echo $row->business_field_id; ?>"><?php echo $row->business_field_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category_id">Kategori</label>
                            <select id="category_id" name="category_id" class="form-control">
                                <option selected disabled>Pilih</option>
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vendor_desc">Deskripsi Perusahaan</label>
                        <textarea class="form-control" id="vendor_desc" name="vendor_desc" placeholder="Deskripsikan perusahaan anda" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                </form>
            </div>
          </div>