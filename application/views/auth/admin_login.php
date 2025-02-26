<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alif Aqiqah & Catering | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_b/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_b/plugins/ionicons-2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_b/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_b/dist/css/adminlte.css">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo base_url() ?>assets_b/index2.html"><b>Admin</b>Login</a>
		</div>
		<!-- /.login-logo -->
		<?php
		if (isset($_GET['alert'])) {
			if ($_GET['alert'] == "failed") {
				echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password Salah.</div>";
			} else if ($_GET['alert'] == "login") {
				echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih Dulu!</div>";
			} else if ($_GET['alert'] == "logout") {
				echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!</div>";
			}
		} ?>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<?php echo $this->session->flashdata('failed'); ?> 
				<form action="<?= base_url(); ?>home/login" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Username" name="username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<!-- <input type="checkbox" id="remember">
								<label for="remember">
									Remember Me
								</label> -->
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <div class="social-auth-links text-center mb-3">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-primary">
						<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
					</a>
					<a href="#" class="btn btn-block btn-danger">
						<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
					</a>
				</div> -->
				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
				</p>
				<p class="mb-0">
					<a href="register.html" class="text-center">Register a new membership</a>
				</p> -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets_b/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url() ?>assets_b/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets_b/dist/js/adminlte.min.js"></script>

</body>

</html>