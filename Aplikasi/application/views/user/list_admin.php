          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Borang administrasi vendor</h6>
            </div>
            <div class="card-body">
                <form >
                    <?php 
                    foreach($vendor->result_array() as $i):
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $vendor_desc=$i['vendor_desc'];
                      $founding_date=$i['founding_date'];
                      $address=$i['address']; 
                      $postcode=$i['postcode'];
                      $vendor_email=$i['vendor_email'];
                      $vendor_phone=$i['vendor_phone'];
                      $vendor_fax=$i['vendor_fax'];
                      $vendor_website=$i['vendor_website'];
                      $business_field=$i['business_field_name'];
                      $category=$i['category_name'];
                    ?>
                    <?php endforeach; ?>
                    <div class="form-group">
                        <label for="vendor_name">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="founding_date">Tahun Didirikan</label>
                        <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="4" id="founding_date" name="founding_date" value="<?php echo $founding_date;?>" readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Perusahaan</label>
                        <input class="form-control" id="address" name="address" value="<?php echo $address;?>" rows="3" readonly="true">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="postcode">Kode Pos</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" value="<?php echo $postcode;?>" id="postcode" name="postcode" placeholder="Kode Pos" readonly="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vendor_email">E-mail</label>
                            <input type="email" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" placeholder="E-mail perusahaan" readonly="true">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="vendor_phone">Telepon</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" value="<?php echo $vendor_phone;?>" id="vendor_phone" name="vendor_phone" placeholder="Telepon" readonly="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vendor_fax">Fax</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" value="<?php echo $vendor_fax;?>" id="vendor_fax" name="vendor_fax" placeholder="Fax" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vendor_website">Website Perusahaan</label>
                        <input type="text" class="form-control" id="vendor_website" name="vendor_website" value="<?php echo $vendor_website;?>" placeholder="Website Perusahaan" readonly="true">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="business_field_id">Bidang Usaha</label>
                            <input type="text" class="form-control"  value="<?php echo $business_field;?>" id="business_field_id" name="business_field_id" placeholder="Kode Pos" readonly="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category_id">Kategori</label>
                            <input type="text" class="form-control" id="category_id" name="category_id" value="<?php echo $category;?>" placeholder="E-mail perusahaan" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vendor_desc">Deskripsi Perusahaan</label>
                        <input class="form-control" id="vendor_desc" name="vendor_desc" value="<?php echo $vendor_desc;?>" placeholder="Deskripsikan perusahaan anda" rows="3" readonly="true">
                    </div>
                    
                </form>
            </div>
          </div>
          

         