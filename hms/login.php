<?php
include("include/config.php");

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Usuario-Login</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-6.css"/>
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2> Hospital "Obispo Indaburo"</h2><h2>Pacientes Login</h2></a>
				</div>
				
				<div class="box-login">
				<div class="botones-login">
								<a href="login.php"><button class="batman btn btn-success" name="submit">Pacientes</button></a>
								<a href="../hms/doctor/index.php"><button class="batman btn btn-success" name="submit">Doctores</button></a>
								<a href="../hms/admin/index.php"><button class="batman btn btn-success" name="submit">Administradores</button></a>
							</div>
					<form class="">
						<fieldset>
							<legend>
								Ingresa con tu cuenta
							</legend>
							<p>
								Porfavor ingresa tu usuario y password.<br />
								<span style="color:red;"></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span><a href="forgot-password.php">
									Olvidaste el Password ?
								</a>
							</div>
							<div class="new-account">
								No tienes una cuenta aun?
								<a href="registration.php">
									Crear una cuenta
								</a>
							</div>
						</fieldset>
					</form>
					<div class="form-actions">
								<a href="../hms/dashboard.php">
									<button class="btn btn-primary pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button></a>
							</div>
					<div class="botones-principal">
						<a href="../"><button class="btn btn-danger btn-block" name="submit">
									Principal 
								</button></a>
							</div>
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Pablo</span>. <span>Todos los derechos reservados</span>
					</div>
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>