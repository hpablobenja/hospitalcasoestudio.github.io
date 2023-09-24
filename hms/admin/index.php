<?php

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin-Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
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
				<h2>Hospital "Obispo Indaburo"</h2><h2>Administrador Login</h2>
				</div>

				<div class="box-login">
				<div class="" style="justify-content: center; display: flex;padding: 5px; display: flex;">
								<a style="margin: 10px;" href="../login.php"><button class="batman btn btn-success" name="submit">Pacientes</button></a>
								<a style="margin: 10px;" href="../doctor/index.php"><button class="batman btn btn-success" name="submit">Doctores</button></a>
								<a style="margin: 10px;" href="../../hms/admin/index.php"><button class="batman btn btn-success" name="submit">Administradores</button></a>
							</div>
					<form class="form-login">
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
									<input type="password" class="form-control password" name="password" placeholder="Password"><i class="fa fa-lock"></i>
									 </span>
							</div>

							
						</fieldset>
					</form>
					<div class="form-actions">
								<a href="../admin/dashboard.php">
									<button class="btn btn-primary pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button></a>
							</div>
					<div class="botones-principal">
						<a href="../../"><button class="btn btn-danger btn-block" name="submit">
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