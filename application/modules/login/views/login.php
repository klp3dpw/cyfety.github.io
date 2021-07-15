<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url()?>assets_login/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to Cyfety!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Please To Login</h2>
								<p>Don't have an account?</p>
								<a href="<?php echo base_url('register'); ?>"
									class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>

								<div class="card-body">
									<?= form_open('login/cek_login'); ?>
									<?php if($this->session->flashdata('pesan') !== null): ?>
										<div class="alert alert-danger"> 
											<?= $this->session->flashdata('pesan'); ?>
										</div>
									<?php endif;?>
										<div class="form-group mb-3">
											<label class="label" for="username" name="username">Username</label>
											<input type="text" class="form-control" name="username "placeholder="Username" required>
										</div>
										<div class="form-group mb-3">
											<label class="label" for="password" name="password">Password</label>
											<input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
										<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
									<?= form_close(); ?>
								</div>
						</div>
						<!-- </form> -->


					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<script src="<?php echo base_url()?>assets_login/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets_login/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets_login/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets_login/js/main.js"></script>

</body>

</html>
