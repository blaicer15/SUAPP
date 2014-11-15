<?php 
include "conect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	<script src="js/site.js"></script></head>
	<body>
		<center>
			<div id="box3" class="col-sm-10 col-md-8 col-md-offset-2 well well-sm">
				<div id="font">
					<legend>
						<br>
						<h1 align="center"><b><i class="fa fa-users"></i> Usuarios</b></h1>
					</legend>
				</div>
				<form action="" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
					<div class="row"><br>
						<div class="col-md-6 search pad">	
							<i class="fa fa-search"></i>
							<input class="form-control" id="system-search" name="" placeholder="Buscar institución">
						</div>
						<div class="col-md-12 table-responsive">

							<br><br><table class="table table-bordered table-hover table-list-search" align="center">
							<thead bgcolor='#00a3cc'>
								<tr>
									<th class="success">Nombre</th>
									<th class="success">Correo Electronico</th>
								</tr>
							</thead>
							<?php  
							$query ='SELECT * FROM usuarios;';
							$result = pg_query($query);
							$lineas = pg_num_rows($result);
							if ($lineas>0) {
								while ($array = pg_fetch_array($result)) {
									$nombre = $array['nombre'];
									$usuario = $array['usuario'];
									$correo = $array['correo'];
									$pass = $array['pass'];
									$rol = $array['rol'];

									?>
									<tr bgcolor='white' align="center">
										<td><?php echo $nombre;?></td>
										<td><?php echo $correo;?></td>
									</tr>
									<?php }; ?>
								</table>
								<?php }; ?>
							</div>

						</div>
					</form>
				</div>


			</div>
		</center>

	</body>
	</html>
