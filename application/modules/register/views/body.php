<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('assets_regis/images/bg-01.jpg');"></div>
<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="<?= base_url ('register'); ?>">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" id="name" name="name" placeholder="Name..." value="<?= set_value 
						('name'); ?>">  
						<span class="focus-input100"></span>
						<?= form_error('name', '<small class="text-danger
						 pl-3">', '</small>'); ?>
					</div> 

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" id="email" name="email" placeholder="Email addess..."value="<?= set_value 
						('email'); ?>">
						<span class="focus-input100"></span>
						<?= form_error('email', '<small class="text-danger
						 pl-3">', '</small>'); ?>
					</div>  

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" id="password1" name="password1" placeholder="*************">
						<span class="focus-input100"></span>
						<?= form_error('pass', '<small class="text-danger
						 pl-3">', '</small>'); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" id="password2" name="password2" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
  
					



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit"> 
								Sign Up
							</button>
						</div>

						<a href="login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>