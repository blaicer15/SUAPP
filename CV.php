<?php 
#include "conect.php";
/*if($_GET['opc']=='si'){
	echo "<script type='text/javascript'>
		alert('Tu informacion corrrecta');
	</script>";
}elseif($_GET['opc']=='no'){
	echo "<script type='text/javascript'>
		alert('Error');
	</script>";
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curriculum Vitae</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="container">
	<div id="box" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 well well-sm">
		<div id="font">
		<legend><br><h1 align="center">Curriculum Vitae</h1></legend>
	</div>
<nav class="navbar navbar-default" role="navigation">
<!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
	</div>
<!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			
			<li data-toggle="modal" data-target="#window"><a href="#">Formación Académica</a></li>	
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Experiencia <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li data-toggle="modal" data-target="#window2"><a href="#">Docente</a></li>
			<li><a href="#">Profesional</a></li>
		</ul>
			</li>
			<li><a href="#">Proyectos de Investigación</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logros<b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="#">Publicaciones</a></li>
			<li><a href="#">Tesis Dirigidas</a></li>
			<li><a href="#">Ponencias</a></li>
			<li><a href="#">Premios</a></li>
			<li><a href="#">Asociaciones</a></li>
		</ul>
			</li>
		</ul>	
	</div>
</nav>
	<form action="" method="post" class="form" role="form">
		<div class="control-group">
			<div class="row">
				<div class="col-md-4"><input class="form-control" name="name" placeholder="Apellido paterno" type="text" required/></div>
				<div class="col-md-4"><input class="form-control" name="name" placeholder="Apellido materno" type="text" required/></div>
				<div class="col-md-4"><input class="form-control" name="name" placeholder="Nombre(s)" type="text" required/></div>
			</div>
		<br>
				<input class="form-control" name="nombre" placeholder="Nombre de la Institución" type="text" required/>
		<br>
				<input class="form-control" name="programap" placeholder="Programa Educativo de Posgrado de Adscripción" type="text" required/>
		<br>
				<input class="form-control" name="programal" placeholder="Programa Educativo de Licenciatura de Adscripción" type="text" required/>
		<br>
				<input class="form-control" name="categoria" placeholder="Categoría/Plaza"type="text" required/>
		<br>
		<br>
					<!--<div class="col-md-3"><input class="form-control" name="edad" placeholder="Edad" type="number" required/></div>
					<br><br>-->
			Fecha de nacimiento<br><br>
				<input class="form-control" name="nacimiento" type="date" required/>	
		<br>
				<input class="form-control" name="email"placeholder="E-mail" type="email" required/>
		<br>
  			<a href="index.php">
				<button class="btn btn-lg " id="color" type="button" name="btnok"><i class="fa fa-check"></i> Aceptar</button></a>
	</div>
	</form>

<div class="modal fade" id="window2" tabindex="-1" role="dialog" aria-laabelledby="myModalLabel" ariahidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-labelledby="myModalLabel" aria-hidden="true">&times;</button>
<h3>Experiencia Docente</h3>
	<div class="modal-body">
		<table>
			<thead>
				<tr>
					<th>Asignaturas impartidas</th>
					<th>Posgrado</th>
					<th>Institución</th>
					<th>Periodo</th>
					</tr>
				</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table><br><br>

		<button id="colors" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-floppy-o"></i> Guardar</button><br><br>
	</div>
	</div>
	</div>
	</div>
</div>

<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Formación académica</h3>
		<!--<form method="post" action="guarda.php">-->
				<div class="modal-body">
					<select class="form-control input-md">
						<option>Seleccionar nivel de estudios</option>
						<option>Licenciatura</option>
						<option>Especialización</option>
						<option>Maestría</option>
						<option>Doctorado</option>
						<option>Posdoctorado</option>
					</select> 
			<br><br>
				<input class="form-control" name="nombrelic" placeholder="Nombre" type="text" required/>
			<br>
				<input class="form-control" name="institucion" placeholder="Institución" type="text" required/>
			<br>
		<!--Quitar espacio y agregar otro calendario-->
			Periodo<br><br>	
				<div class="row">
					<div class="col-md-6"><input class="form-control" name="periodo1" placeholder="Periodo inicio" type="date" required/></div>
					<div class="col-md-6"><input class="form-control" name="periodo2" placeholder="Periodo fin" type="date" required/></div>
				</div>
			<br>Mes y año de titulación<br><br>
				<input class="form-control" name="mestitulacion" placeholder="Mes y año de titulación" type="date" required/>
			<br>
				<input class="form-control" name="cedula" placeholder="Cédula" type="text" required/>
			<br>								
				<button id="colors" type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-floppy-o"></i> Guardar</button>
				<button id="color" type="button" class="col-md-offset-7 btn btn-primary" data-dismiss="modal"><i class="fa fa-check"></i> Aceptar</button>
			<br>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/site.js"></script>

</body>
</html>