<?php 
include "conect.php";
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Institución</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/site.js"></script>
	<script type="text/javascript" src="js/search.js"></script>

</head>

<body class="container">

	<div id="box3" class="col-md-12 col-md-12 col-md-12  well well-sm">

		<div id="font"><legend>
			<br>
			<h1 align="center"><b>INSTITUCIÓNES</b></h1></legend>
		</div>

		<form action="" method="post" id="formulario" class="form" role="form"><br>


			<div class="row">
				<div class="col-md-6">	
					<input class="form-control" id="system-search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filtrado Inteligente">
				</div>

			</div><br>	  					

			<div id="formulario" class="control-group" >

				<div class="table-responsive">
					<table class="table table-bordered table-hover table table-list-search" id="exportar">
						<thead>
							<tr>
								<th class="success">Clave</th>
								<th class="success">Nombre</th>
								<th class="success">Director</th>
								<th class="success">Dirección</th>
								<th class="success">E-mail</th>
								<th class="success">E-mail del director</th>
							</tr>
						</thead>

						<tbody>
							<?php

							$query="Select * FROM c_institucion ORDER BY id";
							$res=pg_query($query);
							while($tabla=pg_fetch_assoc($res)){
								$Clave=$tabla['clave_inst'];
								$Nombre=$tabla['nombre_inst'];
								$Nombre_director=$tabla['nombre_dir'];
								$Direccion=$tabla['direccion_inst'];
								$Email=$tabla['email_inst'];
								$Email_director=$tabla['email_dir'];

								echo 
								"<tr>
								<td>$Clave</td>
								<td>$Nombre</td>
								<td>$Nombre_director</td>
								<td>$Direccion</td>
								<td>$Email</td>
								<td>$Email_director</td>
							</tr>";
						}
						?>											
					</tbody>

				</table>
			</div>

		</div>

	</form>
</div>

</body>
</html>