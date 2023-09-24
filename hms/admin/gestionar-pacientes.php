<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from users where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Gestion Pacientes</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-6.css"/>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Gestion Pacientes</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Gestion Pacientes</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Gestion <span class="text-bold">Pacientes</span></h5>
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Nombre</th>
												<th class="hidden-xs">Direccion</th>
												<th>Ciudad</th>
												<th>Genero </th>
												<th>Correo </th>
												<th>Fecha Creacion </th>
												<th>Fecha Actualizacion </th>
												<th>Historial Medico</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td >1</td>
												<td >Pablo Gutierrez</td>
												<td >Calle Nueva Aventura #532</td>
												<td >La Paz</td>
												<td >Masculino</td>
												<td >pablo.gutierrez412@gmail.com</td>
												<td >2023-05-15/15:24</td>
												<td >2023-05-19/18:45</td>
												<td >
												<a><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td >2</td>
												<td >Lucas Marquez</td>
												<td >Calle 21 de Septiembre #632</td>
												<td >Oruro</td>
												<td >Masculino</td>
												<td >lucas.marquez522@gmail.com</td>
												<td >2023-04-22/10:22</td>
												<td >2023-04-27/14:52</td>
												<td >
												<a><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td >3</td>
												<td >Romina Vallejo</td>
												<td >Calle Las Banderas #882</td>
												<td >La Paz</td>
												<td >Femenino</td>
												<td >romina.vallejo882@gmail.com</td>
												<td >2023-06-05/05:54</td>
												<td >2023-06-14/13:35</td>
												<td >
												<a><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td >4</td>
												<td >Marcelo Rosales</td>
												<td >Calle Florida #116</td>
												<td >La Paz</td>
												<td >Masculino</td>
												<td >marcelo.rosales822@gmail.com</td>
												<td >2023-06-15/10:24</td>
												<td >2023-06-19/18:15</td>
												<td >
												<a><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td >5</td>
												<td >Miriam Velasquez</td>
												<td >Calle Apostol Santiago #173</td>
												<td >La Paz</td>
												<td >Femenino</td>
												<td >miriam.velasquez172@gmail.com</td>
												<td >2023-07-11/12:04</td>
												<td >2023-07-16/17:25</td>
												<td >
												<a><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
							</div>
							<p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg">Imprimir Reporte Pacientes</button></p>  
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
