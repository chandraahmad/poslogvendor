<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dokumen</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dokumen['jumlah'];?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Asset Kendaraan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kendaraan['jumlah'];?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-truck-pickup fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Asset General</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $general['jumlah'];?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-landmark fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sertifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $awards['jumlah'];?> Data</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-certificate fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Log -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="font-weight-bold text-primary">Log Aktifitas User</h4>              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Aktifitas</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>User</th>
                      <th>Aktifitas</th>
                      <th>Waktu</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    foreach($log->result_array() as $i):
                      $fullname=$i['fullname'];
                      $log_desc=$i['log_desc'];
                      $log_time=$i['log_time'];                      
                    ?>
                    <tr>
                      <td><?php echo $fullname;?></td>
                      <td><?php echo $log_desc;?></td>
                      <td><?php echo $log_time;?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          