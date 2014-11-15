<?php 
include "conect.php";

?>
<html>
<head>
	<title>Administrar usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
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
					<h1 align="center"><b><i class="fa fa-users"></i> Administrar usuarios</b></h1>
				</legend>
			</div>

			<ul class="nav nav-tabs">
				<li class="active"><a href="#registro" data-toggle="tab">Registro de usuarios</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">Actualizar usuarios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a data-toggle="tab" href="#editar">Editar Usuarios</a></li>
						<li><a data-toggle="tab" href="#eliminar">Eliminar Usuarios</a></li>
					</ul>
				</li>
			</ul>
			<div class="tab-content"><br>
				<div class="tab-pane fade in active" id="registro">
					<form action="usuariosadmin.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
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
												<input type="radio" name="optionsRadios" id="option3" value="3" checked="true">
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
											<button class="btn btn-lg" id="color" type="submit" href="usuariosadmin.php" name="btnguardar">Guardar</button>
											<br>
											<?php 
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>	
					<div id="resultado">

					</div>	
				</div>

				<div class="tab-pane fade" id="editar">
					<h4>EDITAR USUARIOS</h4><br>
					<div class="row">
						<form action="" accept-charset="utf-8" method="post" class="form" role="form">
							<div class="col-md-2">
								<input type="number" class="form-control" id="iduser" name="iduser" min="1" placeholder="ID del Usuario">
							</div>
							<div class="col-md-4 top">
								<select name="contenido" id="contenido" class="form-control">
									<option value="#">Selecciona una columna</option>
									<option value="nombre">Nombre</option>
									<option value="usuario">Usuario</option>
									<option value="correo">Correo Electronico</option>
									<option value="pass">Contraseña</option>
									<option value="rol">Rol del Usuario</option>
								</select>
							</div>	
							<div class="col-md-4" id="radio">
								<input  type="text" class="form-control" id="editaruser" name="editaruser" placeholder="Introduce los cambios">
							</div>
							<div class="col-md-2 top">
								<button type="submit" name="editar" onclick="editar1()" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
							</div>
							<?php
							if(isset($_POST['editar'])){
								$iduser=htmlspecialchars($_POST['iduser'],ENT_QUOTES);
								$contenido=htmlspecialchars($_POST['contenido'],ENT_QUOTES);
								$editaruser=htmlspecialchars($_POST['editaruser'],ENT_QUOTES);

								$query="UPDATE usuarios set $contenido='$editaruser' where id=$iduser";

									$res=pg_query($query);//guarda la cadena en la variable res
									if($res){
										echo "<script language='JavaScript' type='text/javascript'> alert('Evento Editado Correctamente')</script>";
									}
									else{
										echo "<script language='JavaScript' type='text/javascript'> alert('Error al editar!')</script>";
									}
								}
								?>

</form>
</div>
<hr/>
<div class="row">
	<div class="col-md-6 search pad">	
		<i class="fa fa-search"></i>
		<input class="form-control" id="system-search" name="#" placeholder="Buscar">
	</div>
</div>
<form action="#" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
	<div class="table-responsive" id="tablex">

		<table class="table table-bordered table-hover table-list-search" align="center">
			<thead bgcolor='#00a3cc'>
				<tr>
					<th class="success">Id</th>
					<th class="success">Nombre</th>
					<th class="success">Usuario</th>
					<th class="success">Correo Electronico</th>
					<th class="success">Contraseña</th>
					<th class="success">Rol del Usuario</th>
				</tr>
			</thead>
			<?php  
			$query ='SELECT * FROM usuarios;';
			$result = pg_query($query);
			$lineas = pg_num_rows($result);
			if ($lineas>0) {
				while ($array = pg_fetch_array($result)) {
					$id = $array['id'];
					$nombre = $array['nombre'];
					$usuario = $array['usuario'];
					$correo = $array['correo'];
					$pass = $array['pass'];
					$rol = $array['rol'];

					?>
					<tr bgcolor='white' align="center">
						<td><?php echo $id;?></td>
						<td><?php echo $nombre;?></td>
						<td><?php echo $usuario;?></td>
						<td><?php echo $correo;?></td>
						<td><?php echo $pass;?></td>
						<td><?php echo $rol;?></td>
					</tr>
					<?php }; ?>
				</table>
				<?php }; ?>
			</div>

		</form>
	</div>

	<div class="tab-pane fade" id="eliminar">
		<div class="row">
			<h4>ELIMINAR USUARIOS</h4><br>
			<form action="#" accept-charset="utf-8" method="post" class="form" role="form">
				<div class="col-md-3">
					<input type="number" class="form-control" id="id2" name="id2" min="1" placeholder="ID del Usuario">
				</div>
				<div class="col-md-3 top">
					<button type="submit" name="btneliminar" class="btn btn-danger boton3"><i class="fa fa-trash"></i> Eliminar</button>
				</div>
				<?php
						if(isset($_POST['btneliminar'])){
							$id2=htmlspecialchars($_POST['id2'],ENT_QUOTES);
							
							$query="DELETE FROM usuarios  where id=$id2";

							$res=pg_query($query);//guarda la cadena en la variable res
							if($res){
								echo "<script language='JavaScript' type='text/javascript'> alert('Evento Eliminado Correctamente')</script>";
							}
							else{
								echo "<script language='JavaScript' type='text/javascript'> alert('Error')</script>";
							}
						}
						?>	
			</div>			  					
			<hr/>
		</form>
		<form action="#" accept-charset="utf-8" method="post" id="" class="form" role="form">
			<div class="table-responsive">
				<table class="table table-bordered table-hover" align="center">
					<thead bgcolor='#00a3cc'>
						<tr>
							<th class="success">Id</th>
							<th class="success">Nombre</th>
							<th class="success">Usuario</th>
							<th class="success">Correo Electronico</th>
							<th class="success">Contraseña</th>
							<th class="success">Rol del Usuario</th>
						</tr>
					</thead>
					<?php  
					$query ='SELECT * FROM usuarios;';
					$result = pg_query($query);
					$lineas = pg_num_rows($result);
					if ($lineas>0) {
						while ($array = pg_fetch_array($result)) {
							$id = $array['id'];
							$nombre = $array['nombre'];
							$usuario = $array['usuario'];
							$correo = $array['correo'];
							$pass = $array['pass'];
							$rol = $array['rol'];

							?>
							<tr bgcolor='white' align="center">
								<td><?php echo $id;?></td>
								<td><?php echo $nombre;?></td>
								<td><?php echo $usuario;?></td>
								<td><?php echo $correo;?></td>
								<td><?php echo $pass;?></td>
								<td><?php echo $rol;?></td>
							</tr>
							<?php }; ?>
						</table>
						<?php }; ?>
					</div>

				</form>	
			</div>





		</div>
	</div>
</div>
</center>
</body>
	<script type="text/javascript">
		function editar1(){
			$.ajax({
				url:'editaruser.php',
				type: 'POST',
				beforeSend:function(){
					$('#tablex').html("<center><p><img src='loader.gif'></p></center>");
				},
				success: function(tablex){
					$('#tablex').html(tablex);
				}
			});
		}
	</script>
</html>