<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header text-center">
						Login Admin Cyfety
					</div>
					<div class="card-body">
						<?= form_open('admin_login/adm_login'); ?>
						<?php if($this->session->flashdata('pesan') !== null): ?>
							<div class="alert alert-danger"> 
								<?= $this->session->flashdata('pesan'); ?>
							</div>
						<?php endif;?>
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username" required>
							</div>
							<div class="form-group mt-3">
								<label for="">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
							<button class="btn btn-success mt-3">Login</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>