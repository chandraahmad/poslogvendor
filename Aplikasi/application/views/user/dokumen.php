<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dokumen Perusahaan</h1>
          <!-- Legalitas Perusahaan -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Legalitas Perusahaan</h6>
            </div>
            <div class="card-body"> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $akta['doc_file'] ?>" placeholder="Akta Perusahaan">
                    <div class="input-group-append">
                        <?php if(empty($akta['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_akta" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_akta" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>   
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $kemenkumham['doc_file'] ?>" placeholder="Pengesahan Kemenkumham">
                    <div class="input-group-append">
                        <?php if(empty($kemenkumham['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_kemenkumham" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_kemenkumham" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $siup['doc_file'] ?>" placeholder="Surat Ijin Usaha">
                    <div class="input-group-append">
                        <?php if(empty($siup['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_siup" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_siup" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $tdp['doc_file'] ?>" placeholder="TDP">
                    <div class="input-group-append">
                        <?php if(empty($tdp['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_tdp" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_tdp" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $npwp['doc_file'] ?>" placeholder="NPWP">
                    <div class="input-group-append">
                        <?php if(empty($npwp['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_npwp" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_npwp" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $sppkp['doc_file'] ?>" placeholder="SPPKP">
                    <div class="input-group-append">
                        <?php if(empty($sppkp['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_sppkp" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_sppkp" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $situ['doc_file'] ?>" placeholder="Surat Izin Tempat Usaha">
                    <div class="input-group-append">
                        <?php if(empty($situ['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_situ" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_situ" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>

            </div>
        </div>

            <!-- Referensi Bank -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Referensi Bank</h6>
            </div>
            <div class="card-body"> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $ref['doc_file'] ?>" placeholder="Referensi Bank">
                    <div class="input-group-append">
                        <?php if(empty($ref['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_ref" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_ref" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>   
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $audit['doc_file'] ?>" placeholder="Laporan Keuangan Perusahaan 2 tahun terakhir">
                    <div class="input-group-append">
                        <?php if(empty($audit['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_audit" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            echo '<button data-toggle="modal" data-target="#modal_edit_audit" class="btn btn-warning" type="button">Edit</button>';
                        }?>
                    </div>
                </div>
            </div>
            </div>

            <!-- Surat Pernyataan -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Surat Pernyataan</h6>
            </div>
            <div class="card-body"> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $mitra['doc_file'] ?>" placeholder="Surat Permohonan Menjadi Mitra Kerja Poslog">
                    <div class="input-group-append">
                        <?php if(empty($mitra['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_mitra" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>   
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $pernyataan['doc_file'] ?>" placeholder="Surat Pernyataan">
                    <div class="input-group-append">
                        <?php if(empty($pernyataan['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_mitra" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $pi['doc_file'] ?>" placeholder="Surat Pakta Integritas">
                    <div class="input-group-append">
                        <?php if(empty($pi['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_mitra" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $ptpp['doc_file'] ?>" placeholder="Surat Pernyataan tidak dalam pengawasan pengadilan">
                    <div class="input-group-append">
                        <?php if(empty($ptpp['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_mitra" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $kemampuan['doc_file'] ?>" placeholder="Surat pernyataan Memiliki kemampuan menyediakan Fasilitas, peralatan serta personil">
                    <div class="input-group-append">
                        <?php if(empty($kemampuan['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_mitra" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>
            </div>
            </div>

            <!-- CSMS Vendor -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">CSMS Vendor</h6>
            </div>
            <div class="card-body"> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $csms['doc_file'] ?>" placeholder="Formulir CSMS">
                    <div class="input-group-append">
                        <?php if(empty($csms['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_csms" class="btn btn-primary" type="button">Upload</button>
                            <a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        } else{
                            echo '<a href="#" target="blank" class="btn btn-success" type="button">Download</a>';
                        }?>
                    </div>
                </div>   
                
            </div>
            </div>
            <!-- Company Profile -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Company Profile</h6>
            </div>
            <div class="card-body"> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $cp['doc_file'] ?>" placeholder="Company Profile">
                    <div class="input-group-append">
                        <?php if(empty($cp['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_cp" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            
                        }?>
                    </div>
                </div>   

                <div class="input-group mb-3">
                    <input type="text" class="form-control" readonly value="<?= $logo['doc_file'] ?>" placeholder="Logo Perusahaan">
                    <div class="input-group-append">
                        <?php if(empty($logo['doc_file'])) {
                            echo '<button data-toggle="modal" data-target="#modal_add_logo" class="btn btn-primary" type="button">Upload</button>';
                        } else{
                            
                        }?>
                    </div>
                </div>   
                
            </div>
            </div>

            <!-- ============ MODAL AKTA =============== -->
                <div class="modal fade" id="modal_add_akta" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_akta">Akta Perusahaan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-akta" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL KEMENKUMHAM =============== -->
                <div class="modal fade" id="modal_add_kemenkumham" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_kemenkumham">Pengesahan Kemenkumham</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-kemenkumham" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL SIUP =============== -->
                <div class="modal fade" id="modal_add_siup" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_siup">Surat Ijin Usaha</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-siup" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL TDP =============== -->
                <div class="modal fade" id="modal_add_tdp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_tdp">TDP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-tdp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            <!-- ============ MODAL SPPKP =============== -->
                <div class="modal fade" id="modal_add_sppkp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_sppkp">SPPKP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-sppkp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL SITU =============== -->
                <div class="modal fade" id="modal_add_situ" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_situ">Surat Izin Tempat Usaha</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-situ" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL NPWP =============== -->
                <div class="modal fade" id="modal_add_npwp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_npwp">NPWP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-npwp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL BANK =============== -->
                <div class="modal fade" id="modal_add_ref" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_ref">Referensi Bank</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-ref" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL AUDIT =============== -->
                <div class="modal fade" id="modal_add_audit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_audit">Laporan Keuangan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-audit" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL MITRA =============== -->
                <div class="modal fade" id="modal_add_mitra" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_mitra">Surat Permohonan Mitra</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-mitra" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL PERNYATAAN =============== -->
                <div class="modal fade" id="modal_add_pernyataan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_pernyataan">Surat Pernyataan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-pernyataan" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL PI =============== -->
                <div class="modal fade" id="modal_add_pi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_pi">Surat Pakta Integritas</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-pi" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL PTPP =============== -->
                <div class="modal fade" id="modal_add_ptpp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_ptpp">Surat Pengawasan Pengadilan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-ptpp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL KEMAMPUAN =============== -->
                <div class="modal fade" id="modal_add_kemampuan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_kemampuan">Surat Memiliki Kemampuan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-kemampuan" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL CSMS =============== -->
                <div class="modal fade" id="modal_add_csms" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_csms">CSMS Vendor</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-csms" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL CP =============== -->
                <div class="modal fade" id="modal_add_cp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_cp">Company Profile</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-cp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL LOGO =============== -->
                <div class="modal fade" id="modal_add_logo" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_add_logo">Company Profile</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-logo" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk JPG/JPEG/PNG maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

                <!-- ============ MODAL EDIT AKTA =============== -->
                <div class="modal fade" id="modal_edit_akta" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_akta">Akta Perusahaan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-akta" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT KEMENKUMHAM =============== -->
                <div class="modal fade" id="modal_edit_kemenkumham" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_kemenkumham">Pengesahan Kemenkumham</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-kemenkumham" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT SIUP =============== -->
                <div class="modal fade" id="modal_edit_siup" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_siup">Surat Ijin Usaha</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-siup" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT TDP =============== -->
                <div class="modal fade" id="modal_edit_tdp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_tdp">TDP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-tdp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            <!-- ============ MODAL EDIT SPPKP =============== -->
                <div class="modal fade" id="modal_edit_sppkp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_sppkp">SPPKP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-sppkp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT SITU =============== -->
                <div class="modal fade" id="modal_edit_situ" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_situ">Surat Izin Tempat Usaha</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-situ" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT NPWP =============== -->
                <div class="modal fade" id="modal_edit_npwp" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_npwp">NPWP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-npwp" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT BANK =============== -->
                <div class="modal fade" id="modal_edit_ref" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_ref">Referensi Bank</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-ref" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

            <!-- ============ MODAL EDIT AUDIT =============== -->
                <div class="modal fade" id="modal_edit_audit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modal_edit_audit">Laporan Keuangan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    </div>
                    <form id="modal-edit-audit" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="doc_file" name="doc_file">
                            <label class="custom-file-label" for="doc_file">Pilih file</label>
                            <small id="doc_file" class="form-text text-muted">File berbentuk PDF/Doc/Docx maksimal 10MB</small>
                        </div>
        
                        </div>
        
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info" type="submit">Simpan</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                
          