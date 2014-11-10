<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recursos Humanos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="CSS/colors.css">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="container">
	<?php
	$file = basename($_SERVER['PHP_SELF']);
	include "resbar.php";
	include "barra.php";
	?>
	<div id="box" class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 well well-sm">

		<div id="font"><legend>
			<br>
			<h1 align="center">Recursos Humanos</h1></legend>
		</div>
					 
		<form action="" method="post" class="form" role="form">

				<div class="row">
					<div class="col-md-4"><input class="form-control" name="name" placeholder="Apellido paterno" type="text" required/></div>
					<div class="col-md-4"><input class="form-control" name="name" placeholder="Apellido materno" type="text" required/></div>
					<div class="col-md-4"><input class="form-control" name="name" placeholder="Nombre(s)" type="text" required/></div>
				</div>

			<br>
			<input class="form-control" name="email" placeholder="Correo electr&oacute;nico" type="email" required/>
			<br>
			<input class="form-control" name="address" placeholder="Direcci&oacute;n" type="text" required/>
			<br>
			<input class="form-control" name="phone" placeholder="Numero telef&oacute;nico" type="text" required/>		

			<h4>Marcar rol(es) que a participado: </h4>
			<div class="checkbox">
				<label >
					<input type="checkbox" name="opciones" id="opt1" value="opcion_1" checked>Docente investigador<br>
				</label>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="opciones" id="opt2" value="opcion_2" checked>Profesor colaborador<br>
				</label>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="opciones" id="opt3" value="opcion_3" checked>Alumno tesista<br>
				</label>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="opciones" id="opt4" value="opcion_4" checked>Alumno residente<br>
				</label>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="opciones" id="opt4" value="opcion_4" checked>Alumno servicio social<br>
				</label>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="opciones" id="opt4" value="opcion_4" checked>Alumno creditos complementarios<br>
				</label>
			</div>

			<!--<p class="text-success btn btn-md">Elegir rol actual</p>-->


			<div id="box2" class="col-xs-12  col-md-6 col-md-offset-3 well  ">
				<form action="" method="post" class="form" role="form">

				Ingrese los datos correspondientes:	
				<br><br>
				<input class="form-control" name="email" placeholder="Correo electr&oacute;nico" type="email" required/>
				<br>
				<input class="form-control" name="address" placeholder="Direcci&oacute;n" type="text" required/>
				<br>
				<input class="form-control" name="phone" placeholder="Numero telef&oacute;nico" type="text" required/>		
				</form>
			</div>

			<button class="btn btn-lg btn-success" data-toggle="modal" data-target="#window" name ="btnadd"><i class="fa fa-plus"></i> Informaci&oacute;n acad&eacute;mica</button>
			<button class="btn btn-lg" id="color" type="button" name="btnok"><i class="fa fa-check"></i> Aceptar</button>


			<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Ingresa los datos de la instituci&oacute;n</h3>
						</div>

						<div class="modal-body">
							<input class="form-control" name="name" placeholder="Nombre" type="text" required/>
							<br>
							<input class="form-control" name="address" placeholder="Direcci&oacute;n" type="text" required/>
							<br>
							<input class="form-control" name="email" placeholder="Correo electr&oacute;nico" type="text" required/>
							<br>
							<input class="form-control" name="namedir" placeholder="Nombre del director" type="email" type="text" required/>
							<br>
							<input class="form-control" name="emaildir" placeholder="Correo electr&oacute;nico del director" type="text" required/>		
							<br>
						</div>

						<div class="modal-footer">
							<button id="color" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-floppy-o"></i> Guardar</button>
						</div>

					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="js/show.js"></script>
	<script src="js/date.js"></script>-->
</body>
</html>