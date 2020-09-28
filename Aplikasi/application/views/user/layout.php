<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Vendor | PT. Pos Logistik Indonesia</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap-select.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('include/topbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php $this->load->view($view);?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tim Seleksi ICT PT. Pos Logistik Indonesia 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>

  <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap-select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dist/js/i18n/defaults-*.min.js"></script>

  <script>
    $("#founding_date").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
    });
  </script>
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>

  <!-- AJAX AKTA -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-akta', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_akta') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX KEMENKUMHAM -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-kemenkumham', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_kemenkumham') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX SIUP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-siup', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_siup') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX TDP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-tdp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_tdp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX NPWP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-npwp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_npwp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX SPPKP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-sppkp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_sppkp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX SITU -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-situ', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_situ') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX BANK -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-ref', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_ref') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX AUDIT -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-audit', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_audit') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX MITRA -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-mitra', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_mitra') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX PERNYATAAN -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-pernyataan', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_pernyataan') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX PI -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-pi', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_pi') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX PTPP -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-ptpp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_ptpp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX KEMAMPUAN -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-kemampuan', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_kemampuan') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX CSMS -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-csms', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_csms') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX CP -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-cp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_cp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX LOGO -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-logo', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_logo') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX EDIT AKTA -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-akta', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_akta') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT KEMENKUMHAM -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-kemenkumham', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_kemenkumham') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT SIUP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-siup', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_siup') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT TDP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-tdp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_tdp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT NPWP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-npwp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_npwp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT SPPKP -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-sppkp', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_sppkp') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

  <!-- AJAX EDIT SITU -->
  <script type="text/javascript">
        $(document).on('submit', '#modal-edit-situ', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_situ') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX EDIT BANK -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-edit-ref', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_ref') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX EDIT AUDIT -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-edit-audit', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_audit') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/dokumen') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX AWARDS -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-awards', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/add_awards') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        window.location.replace("<?= base_url('index.php/User/main/awards') ?>");
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>

    <!-- AJAX EDIT AWARDS -->
    <script type="text/javascript">
        $(document).on('submit', '#modal-edit-awards', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/User/main/edit_awards') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
              window.location.replace("<?= base_url('index.php/User/main/awards') ?>");
                // var out = jQuery.parseJSON(data);
                // if (out.status == true) {
                //     if(window.confirm(out.message)) {
                //         window.location.replace("<?= base_url('index.php/User/main/awards') ?>");
                //     }
                // } else {
                //     window.confirm(out.message);
                // }
            })
            a.preventDefault();
        });
    </script>

    <script>
    function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode != 46 && charCode > 31 
			&& (charCode < 48 || charCode > 57))
			return false;
			return true;
		}  
    </script> 

</body>

</html>
