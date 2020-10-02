<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="card text-center shadow h-100 py-2">
            <div class="card-body">
              <?php if(empty($logo['doc_file'])) : ?>

              <?php else : ?>
              <img src="<?= base_url() ?>assets/dokumen/<?= $logo['doc_file'] ?>" width="50px"/>
              <?php endif; ?>
              <?php if(empty($vendor['vendor_name'])) : ?>
                <p class="card-text">Dimohon untuk melengkapi data administrasi perusahaan anda.</p>
                <a href="<?php echo base_url('index.php/user/main/administrasi'); ?>" class="btn btn-primary">Isi Disini</a>
              <?php else : ?>
                <h5 class="card-title"><?= $vendor['vendor_name'] ?></h5>
                <h5 class="card-title">Status : <?php if($vendor['vendor_status'] == 1) {
                   echo "Belum terverifikasi";
                   } else  { echo "Terverifikasi"; } ?></h5>
                <?php if($vendor['vendor_status'] == 1) : ?>
                  <p class="card-text">Dimohon untuk melengkapi kekurangan data yang kami butuhkan.</p>
                  <?php if(empty($akta['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($kemenkumham['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($siup['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($tdp['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($npwp['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($sppkp['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($situ['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($ref['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($audit['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($mitra['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($pernyataan['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($pi['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($ptpp['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($kemampuan['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($csms['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($cp['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($logo['doc_type'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/dokumen'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($kendaraan['vendor_id'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/kendaraan'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($general['vendor_id'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/general'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php elseif(empty($awards['vendor_id'])) :?>
                    <a href="<?php echo base_url('index.php/user/main/awards'); ?>" class="btn btn-primary">Isi Disini</a>
                  <?php else :?>
                    <p class="card-text">Data anda sedang ditinjau.</p>
                  <?php endif; ?>
                <?php else :?>
                  <p class="card-text">Selamat anda telah terdaftar sebagai rekanan perusahaan kami.</p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>

          