<?php

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pacientes | Historial Medicos</title>
		
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
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Paciente | Historial Medico</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Pacientes</span>
</li>
<li class="active">
<span>Historial Medico</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Paciente <span class="text-bold">Historial Medico</span></h5>

<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Detalles del Paciente</td></tr>

    <tr>
    <th scope>Nombre Paciente</th>
    <td>Pablo Gutierrez</td>
    <th scope>Correo Paciente</th>
    <td>hpablobenja313@gmail.com</td>
  </tr>
  <tr>
    <th scope>Celular Paciente</th>
    <td>65560327</td>
    <th>Direccion Paciente</th>
    <td>Calle Benito Suarez #323</td>
  </tr>
    <tr>
    <th>Genero Paciente</th>
    <td>Masculino</td>
    <th>Edad Paciente</th>
    <td>25</td>
  </tr>
  <tr>
    
    <th>Historial Medico Paciente</th>
    <td>Ya paso el el Covid 19</td>
     <th>Fecha Registro Paciente</th>
    <td>2019-11-04 16:38:06</td>
  </tr>
 

</table>
<?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="8" >Historial Medico</th> 
  </tr>
  <tr>
    <th>#</th>
<th>Presion</th>
<th>Peso</th>
<th>Azucar Sangre</th>
<th>Temperatura Corporal</th>
<th>Prescripcion Medica</th>
<th>Fecha Visita</th>
</tr>

<tr>
  <td>1</td>
  <td>125/80</td>
  <td>85 kg</td>
  <td>86/120</td> 
  <td>37 grados</td>
  <td>Se diagnostico un resfriado. Se receto unos antibioticos</td>
  <td>2023-05-18 20:08:55</td> 
</tr>
<tr>
  <td>2</td>
  <td>130/80</td>
  <td>90 kg</td>
  <td>98/120</td> 
  <td>35 grados</td>
  <td>Se diagnostico un esguince. Se receto unos calmantes y reposo</td>
  <td>2023-05-18 20:09:11</td>
</tr>
</table>
<p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg">Imprimir Historial Medico</button></p>  
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php //include('include/setting.php');?>
			
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
