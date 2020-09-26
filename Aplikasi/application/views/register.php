<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Vendor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/public/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/public/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="register-form" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title p-b-43">
						Create your acconut
					</span>
                    <div class="form-group">
                        <label>Full Name :</label>
                        <input type="text" name="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gender :</label>
                        <select name="gender" class="form-control">
                            <option value="">-- Select --</option>
                            <?php foreach($GetAllGender as $value) { ?>
                            <option value="<?= $value ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Retry Password :</label>
                        <input type="password" name="password2" class="form-control">
                    </div>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">Register Now</button>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('http://192.168.64.2/poslogvendor/Aplikasi/assets/public/images/national-transport.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/daterangepicker/moment.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/public/js/main.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript">
        $(document).on('submit', '#register-form', function(a){
            var formData = new FormData($(this)[0]);
            $.ajax({
            method: 'POST',
            url: "<?= base_url('index.php/Main/register_process') ?>",
            data: formData,
            processData: false,
            contentType: false
            }).done(function(data) {
                var out = jQuery.parseJSON(data);
                if (out.status == true) {
                    if(window.confirm(out.message)) {
                        location.reload();
                    }
                } else {
                    window.confirm(out.message);
                }
            })
            a.preventDefault();
        });
    </script>
    

</body>
</html>