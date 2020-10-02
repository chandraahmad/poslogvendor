<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <?= $this->session->flashdata('message') ?>
            <div class="card-body">
                <form action="<?php echo base_url(). 'index.php/user/main/edit_user'; ?>" method="post">
                    <?php 
                    foreach($user->result_array() as $i):
                      $id_user=$i['id_user'];
                      $fullname=$i['fullname'];
                      $gender=$i['gender'];
                      $email=$i['email'];
                      $job_title=$i['job_title']; 
                    ?>
                    <?php endforeach; ?>
                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user;?>" readonly hidden="true">
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname;?>" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select id="gender" name="gender" class="form-control">
                                <?php foreach($GetAllGender as $value) { ?>
                                    <option <?php if($value == $gender){ echo 'selected="selected"'; } ?> value="<?= $value ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <a href="<?php echo base_url(). 'index.php/user/main/password'; ?>" class="btn btn-sm btn-info">Ganti Password</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="job_title" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $job_title;?>" placeholder="Isi jabatan anda">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                </form>
            </div>
          </div>