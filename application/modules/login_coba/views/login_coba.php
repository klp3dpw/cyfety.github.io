<!DOCTYPE html>
<html lang="en">
<head>
	<title> 
		Login
</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets_regis/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets_regis/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets_regis/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_regis/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style=""></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<?= form_open('login_coba/cek_login'); ?>
					<?php if($this->session->flashdata('pesan') !== null): ?>
						<div class="alert alert-danger"> 
							<?= $this->session->flashdata('pesan'); ?>
						</div>
					<?php endif;?>
					<span class="login100-form-title p-b-59">
						Sign In
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" id="email" name="email" placeholder="Email addess...">
					</div>  

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="password1" name="password" placeholder="*************">
					</div>
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit"> 
								Sign In
							</button>
						</div>

						<a href="register" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					<?= form_open('login_coba/cek_login'); ?>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
<script src="assets_regis/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/vendor/bootstrap/js/popper.js"></script>
	<script src="assets_regis/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets_regis/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets_regis/js/main.js"></script>

</body>
</html>