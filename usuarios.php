<?php 
include "conect.php";

if (isset($_POST['btnguardar'])){
	$nombre=htmlspecialchars($_POST['nombre'],ENT_QUOTES);
	$usuario=htmlspecialchars($_POST['usuario'],ENT_QUOTES);
	$correo=htmlspecialchars($_POST['correo'],ENT_QUOTES);
	$pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
	$optionsRadios=htmlspecialchars($_POST['optionsRadios'],ENT_QUOTES);

	$query="SELECT * FROM usuarios WHERE usuario='$usuario'";
	$res=pg_query($query);
	$num =pg_num_rows($res);
	if ($num==0){
		$query2= "INSERT INTO usuarios(nombre, usuario, correo, pass, rol)
		VALUES('$nombre','$usuario','$correo','$pass','$optionsRadios')";

		$res=pg_query($query2);
		echo "<script language='JavaScript' type='text/javascript'> alert('Usuario registrado correctamente')</script>";

	}
	else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Este nombre de usuario ya esta registrado, porfavor elige otro')</script>";		

	}
}
?>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/site.js"></script>
	<script type="text/javascript">
		function informacion(){
			$.ajax({
				url:'query1.php',
				type: 'POST',
				
				success: function(respuesta){
					$('#resultado').html(respuesta);
				}
			});
		}
	</script>
</head>
<body class="container">
	<center>
		<div id="box3" class="col-sm-10 col-md-8 col-md-offset-2 well well-sm">
			<div id="font">
				<legend>
					<br>
					<h1 align="center"><b><i class="fa fa-users"></i> Registro de usuarios</b></h1>
				</legend>
			</div>
			<form action="usuarios.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
				<div class="row">
					<div class="col-md-12">
						<div id="#" class="col-md-10 col-md-offset-1">
							<br>
							<input class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" type="text" required/>
							<br>
							<input class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" type="text" required/>
							<br>
							<input class="form-control" id="correo" name="correo" placeholder="Correo Electronico" type="email" required/>
							<br>
							<input class="form-control" id="pass" name="pass" placeholder="Contraseña" type="password" required/>
							<br>

							<div class="col-md-12">
								<p><b>Rol de usuario</b></p>	
								<div class="radio col-md-4 bet">
									<label>
										<input type="radio" name="optionsRadios" id="option1" value="1">
										Administrador
									</label>
								</div>
								<div class="radio col-md-4">
									<label>
										<input type="radio" name="optionsRadios" id="option2" value="2">
										Capturista
									</label>
								</div>
								<div class="radio col-md-4">
									<label>
										<input type="radio" name="optionsRadios" id="option3" value="3">
										Visualizador
									</label>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<div class="col-md-6 us">
									<a onclick="informacion()" class="btn btn-success boton" name="btnadd">Ver Usuarios</a>
								</div>
								<div class="col-md-6">
									<button class="btn btn-lg" id="color" type="submit" href="usuarios.php" name="btnguardar"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div id="resultado">

			</div>
		</div>


	</div>
</center>



<!--<form action="usuarios.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
	<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3><center><b>Usuarios de SUAP</b></center></h3>
				</div>

				<div class="modal-body">
					<div id="formulario" class="control-group">-->
<!--<div class="table-responsive">
					<table class="table table-bordered table-hover table-list-search">
						
						

						<tbody>
													
						</tbody>
					</table>

				</div>	-->






				<!--</div>
				</div>

			</div>
		</div>
	</div>

	
</form>-->

</body>
</html>