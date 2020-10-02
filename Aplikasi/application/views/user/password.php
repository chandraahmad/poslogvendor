<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
            </div>
            <?= $this->session->flashdata('message') ?>
            <div class="card-body">
                <form action="<?php echo base_url(). 'index.php/user/main/edit_password'; ?>" method="post">
                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?= ucwords($this->session->userdata('id_user')); ?>" readonly hidden="true">
                    <div class="form-group row">
                        <label for="password1" class="col-sm-2 col-form-label">Password Sekarang</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password Sekarang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password2" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password3" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password3" name="password3" placeholder="Ulangi Password Baru">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                </form>
            </div>
          </div>