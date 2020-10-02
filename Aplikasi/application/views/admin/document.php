          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Legalitas Perusahaan</h4> 
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($legal->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                      $doc_category=$i['doc_category'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>                    
                  </tbody>                  
                </table>
              </div>
              <?php if ($doc_status == 1) : ?>
                <a data-toggle="modal" data-target="#modal_setuju<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-success btn-flat">Setujui</a>
              <?php else : ?>
                <a data-toggle="modal" data-target="#modal_setuju<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-secondary btn-flat disabled">Telah Disetujui</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Referensi Bank</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($ref->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                      $doc_category=$i['doc_category'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_ref<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_ref<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <?php if ($doc_status == 1) : ?>
                <a data-toggle="modal" data-target="#modal_ref<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-success btn-flat">Setujui</a>
              <?php else : ?>
                <a data-toggle="modal" data-target="#modal_ref<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-secondary btn-flat disabled">Telah Disetujui</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Surat Pernyataan</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($surat->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                      $doc_category=$i['doc_category'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_surat<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_surat<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <?php if ($doc_status == 1) : ?>
                <a data-toggle="modal" data-target="#modal_surat<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-success btn-flat">Setujui</a>
              <?php else : ?>
                <a data-toggle="modal" data-target="#modal_surat<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-secondary btn-flat disabled">Telah Disetujui</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">CSMS Vendor</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($csms->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                      $doc_category=$i['doc_category'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_csms<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_csms<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <?php if ($doc_status == 1) : ?>
                <a data-toggle="modal" data-target="#modal_csms<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-success btn-flat">Setujui</a>
              <?php else : ?>
                <a data-toggle="modal" data-target="#modal_csms<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-secondary btn-flat disabled">Telah Disetujui</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Company Profile</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">Nama Perusahaan</th>
                      <th class="text-center">Jenis Dokumen</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($cp->result_array() as $i):
                      $doc_id=$i['doc_id'];
                      $vendor_id=$i['vendor_id'];
                      $vendor_name=$i['vendor_name'];
                      $doc_type=$i['doc_type'];
                      $doc_file=$i['doc_file'];
                      $doc_status=$i['doc_status'];
                      $doc_category=$i['doc_category'];
                    ?>
                    <tr>
                      <td><?php echo $vendor_name;?></td>
                      <td><?php echo $doc_type;?></td>
                      <?php if( $doc_status == 1) : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_cp<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php else : ?>
                            <td class="text-center"><a data-toggle="modal" data-target="#modal_hapus_cp<?php echo $doc_id; ?>" style="color: white;" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a> <a href="<?= base_url() ?>assets/dokumen/<?php echo $doc_file;?>" target="blank" style="color: white;" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <?php if ($doc_status == 1) : ?>
                <a data-toggle="modal" data-target="#modal_cp<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-success btn-flat">Setujui</a>
              <?php else : ?>
                <a data-toggle="modal" data-target="#modal_cp<?php echo $doc_category; ?>" style="color: white;" class="btn btn-block btn-secondary btn-flat disabled">Telah Disetujui</a>
              <?php endif; ?>
            </div>
          </div>

        <!-- ============ MODAL SETUJU LEGALITAS =============== -->
    <?php
        foreach($legal->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
            $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_setuju<?php echo $doc_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_setuju">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL SETUJU LEGALITAS-->

    <!-- ============ MODAL SETUJU REFERENSI =============== -->
    <?php
        foreach($ref->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
            $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_ref<?php echo $doc_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_ref">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_ref'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL SETUJU REFERENSI-->

    <!-- ============ MODAL SETUJU SURAT =============== -->
    <?php
        foreach($surat->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
            $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_surat<?php echo $doc_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_surat">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_surat'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL SETUJU SURAT-->

    <!-- ============ MODAL SETUJU CSMS =============== -->
    <?php
        foreach($csms->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
            $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_csms<?php echo $doc_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_csms">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_csms'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL SETUJU CSMS-->

    <!-- ============ MODAL SETUJU CP =============== -->
    <?php
        foreach($cp->result_array() as $i):
            $doc_id=$i['doc_id'];
            $vendor_id=$i['vendor_id'];
            $vendor_name=$i['vendor_name'];
            $vendor_email=$i['vendor_email'];
            $doc_type=$i['doc_type'];
            $doc_file=$i['doc_file'];
            $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_cp<?php echo $doc_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_cp">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/setuju_cp'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $vendor_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_email" name="vendor_email" value="<?php echo $vendor_email;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menyetujui dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL SETUJU CP-->

    <!-- ============ MODAL HAPUS =============== -->
    <?php
        foreach($legal->result_array() as $i):
          $doc_id=$i['doc_id'];
          $vendor_id=$i['vendor_id'];
          $vendor_name=$i['vendor_name'];
          $doc_type=$i['doc_type'];
          $doc_file=$i['doc_file'];
          $doc_status=$i['doc_status'];
          $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_hapus<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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

    <!-- ============ MODAL HAPUS REFERENSI =============== -->
    <?php
        foreach($ref->result_array() as $i):
          $doc_id=$i['doc_id'];
          $vendor_id=$i['vendor_id'];
          $vendor_name=$i['vendor_name'];
          $doc_type=$i['doc_type'];
          $doc_file=$i['doc_file'];
          $doc_status=$i['doc_status'];
          $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_hapus_ref<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus_ref">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL HAPUS REFERENSI-->

    <!-- ============ MODAL HAPUS SURAT =============== -->
    <?php
        foreach($surat->result_array() as $i):
          $doc_id=$i['doc_id'];
          $vendor_id=$i['vendor_id'];
          $vendor_name=$i['vendor_name'];
          $doc_type=$i['doc_type'];
          $doc_file=$i['doc_file'];
          $doc_status=$i['doc_status'];
          $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_hapus_surat<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus_surat">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL HAPUS SURAT-->

    <!-- ============ MODAL HAPUS CSMS =============== -->
    <?php
        foreach($csms->result_array() as $i):
          $doc_id=$i['doc_id'];
          $vendor_id=$i['vendor_id'];
          $vendor_name=$i['vendor_name'];
          $doc_type=$i['doc_type'];
          $doc_file=$i['doc_file'];
          $doc_status=$i['doc_status'];
          $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_hapus_csms<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus_csms">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL HAPUS CSMS-->

    <!-- ============ MODAL HAPUS CP =============== -->
    <?php
        foreach($cp->result_array() as $i):
          $doc_id=$i['doc_id'];
          $vendor_id=$i['vendor_id'];
          $vendor_name=$i['vendor_name'];
          $doc_type=$i['doc_type'];
          $doc_file=$i['doc_file'];
          $doc_status=$i['doc_status'];
          $doc_category=$i['doc_category'];
        ?>
        <div class="modal fade" id="modal_hapus_cp<?php echo $doc_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_hapus_cp">Persetujuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form action="<?php echo base_url(). 'index.php/admin/main/hapus_dokumen'; ?>" method="post">
                <div class="modal-body">

                <input type="text" class="form-control" id="doc_id" name="doc_id" value="<?php echo $doc_id;?>" hidden="true">
                <input type="text" class="form-control" id="doc_type" name="doc_type" value="<?php echo $doc_type;?>" hidden="true">
                <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="<?php echo $vendor_name;?>" hidden="true">
                <h6 class="font-weight-bold">Apakah anda yakin menghapus dokumen <?php echo $vendor_name;?> ?</h6>
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
    <!--END MODAL HAPUS CP-->

          