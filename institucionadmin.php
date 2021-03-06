<?php 
include "conect.php";
?>

<?php
if(isset($_POST['btneditar'])){
	$id=htmlspecialchars($_POST['id'],ENT_QUOTES);
	$contenido=htmlspecialchars($_POST['contenido'],ENT_QUOTES);
	$editar=htmlspecialchars($_POST['editar'],ENT_QUOTES);

	$query="UPDATE c_institucion set $contenido='$editar' where id=$id";

	$res=pg_query($query);//guarda la cadena en la variable res
	if($res){
		echo "<script language='JavaScript' type='text/javascript'> alert('Evento Editado Correctamente')</script>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Error')</script>";
	}
}
?>

<?php
if(isset($_POST['btneliminar'])){
	$id=htmlspecialchars($_POST['id'],ENT_QUOTES);
	
	$query="DELETE FROM c_institucion  where id=$id";

	$res=pg_query($query);//guarda la cadena en la variable res
	if($res){
		echo "<script language='JavaScript' type='text/javascript'> alert('Evento Eliminado Correctamente')</script>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Error')</script>";
	}
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Administrador institución </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	<script src="js/site.js"></script>
</head>

<body class="container">
	<div id="box3" class="col-md-12 col-md-12 col-md-12  well well-sm">
		<div id="font"><legend>
			<br>
			<h1 align="center"><b>ADMINISTRADOR</b></h1></legend>
		</div>

		<form action="institucionadmin.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
			<div class="row">
				<div class="col-md-6 search">	
					<i class="fa fa-search"></i>
					<input class="form-control" id="system-search" name="" placeholder="Buscar institución">
				</div>
				<div class="col-md-6">
					<button class="btn btn-success boton" data-toggle="modal" data-target="#window" name ="btnadd"><i class="fa fa-plus"></i> Agregar Institución</button>
				</div>

				<div class="row">	<br><br>
					<h4>REGISTROS</h4><br>
					<div class="col-md-4">
						<?php 
						$registros="SELECT * FROM c_institucion";			
						$x=pg_query($registros);
						while ($idmax=pg_fetch_assoc($x)) {
							$idnum=$idmax['id'];							
						$num=pg_num_rows($idmax);
						}
						?>

						<input type="number" class="form-control fil" id="id" name="id" min="1" max="$idmax" placeholder="ID de la institución">
					</div>
					<div class="col-md-4">
						<select name="contenido" class="form-control sel">
							<option value="#">Selecciona una columna</option>
							<option value="nombre_inst">Nombre</option>
							<option value="nombre_dir">Director</option>
							<option value="direccion_inst">Dirección</option>
							<option value="email_inst">E-mail</option>
							<option value="email_dir">E-mail del director</option>
						</select>
					</div>											
				</div><br><br>

				<div class="row">
					<div class="col-md-6">
						<input  type="text" class="form-control fil" name="editar" placeholder="Introduce los cambios">
					</div>
					<div class="col-md-6">
						<button type="submit" href="institucionadmin.php" name="btneditar" class="btn btn-warning boton"><i class="fa fa-pencil"></i> Editar</button>
					</div>	
				</div><br>		

			</div>	  					

			<div id="formulario" class="control-group">

				<div class="table-responsive">
					<table class="table table-bordered table-hover table-list-search">
						<thead>
							<tr>
								<th class="success">Id</th>
								<th class="success">Clave</th>
								<th class="success">Nombre</th>
								<th class="success">Director</th>
								<th class="success">Dirección</th>
								<th class="success">E-mail</th>
								<th class="success">E-mail del director</th>
								<th class="success">Eliminar</th>
							</tr>
						</thead>

						<tbody>
							<?php

							$query="Select * FROM c_institucion ORDER BY id";
							$res=pg_query($query);
							while($tabla=pg_fetch_assoc($res)){
								$Id=$tabla['id'];
								$Clave=$tabla['clave_inst'];
								$Nombre=$tabla['nombre_inst'];
								$Nombre_director=$tabla['nombre_dir'];
								$Direccion=$tabla['direccion_inst'];
								$Email=$tabla['email_inst'];
								$Email_director=$tabla['email_dir'];

								echo 
								"<tr>
								<td>$Id</td>
								<td>$Clave</td>
								<td>$Nombre</td>
								<td>$Nombre_director</td>
								<td>$Direccion</td>
								<td>$Email</td>
								<td>$Email_director</td>
								<td><button type='submit' name='btneliminar' class='btn btn-danger boton'><i class='fa fa-trash'></i></button></td>

							</tr>";
						}
						?>											
					</tbody>
				</table>
			</div>	
		</div>
	</form>
		<!--Inicia el modal para agregar nuevas institucion-->
	<form action="save_c_inst.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
		<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Ingresa los datos de la institución</h3>
					</div>

					<div class="modal-body">
						<input class="form-control" id="clave_c_inst" name="clave_c_inst" placeholder="Clave" type="text" required/>
						<br>
						<input class="form-control" id="nombre_c_inst" name="nombre_c_inst" placeholder="Nombre" type="text" required/>
						<br>
						<input class="form-control" id="direccion_c_inst" name="direccion_c_inst" placeholder="Direcci&oacute;n" type="text" required/>
						<br>
						<input class="form-control" id="email_c_inst" name="email_c_inst" placeholder="Correo electr&oacute;nico de la Institución" type="email" required/>
						<br>
						<input class="form-control" name="namedir_c_inst" id="namedir_c_inst" placeholder="Nombre del director" type="text" required/>
						<br>
						<input class="form-control" id="emaildir_c_inst" name="emaildir_c_inst" placeholder="Correo electr&oacute;nico del director" type="email" required/>		
						<br>
					</div>

					<div class="modal-footer">
						<button id="color" type="submit" name="btnguardarc_inst" class="btn btn-primary" href="save_c_inst.php"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>

				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>