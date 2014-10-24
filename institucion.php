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
	<script>
		$(function(){
			$("#institucion").change(function(event){
				var id = $(this).val();
				if(id != ""){
					$.getJSON('query_inst.php',{id: id},function(json,status){
						$("#clave_inst").val(json.clave_inst);
						$("#direccion_inst").val(json.direccion_inst);
						$("#email_inst").val(json.email_inst);
						$("#nombre_dir").val(json.nombre_dir);
						$("#email_dir").val(json.email_dir);
						console.log(json);
					});
				}
			});

		});
	</script>
<!--Este archivo ocupa otros 3 archivos:
	*El query_inst.php para la function de el select que autocompleta los datos.
	*El saveinst.php el cual guarda la informacion de la institucion.
	*El save_c_inst.php el cual guarda la informacion en el modalde una nueva institucion.  
-->
</head>

<body class="container">
	<?php
	$file = basename($_SERVER['PHP_SELF']);
	include "resbar.php";
	include "barra.php";
	?>
	<div id="box" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 well well-sm">

		<div id="font"><legend>
			<br>
			<h1 align="center"><b>INSTITUCIONES</b></h1></legend>
		</div>
		<!--_Manda toda la informacion al archivo saveinst.php para procesarlo y guardarlo en la BD-->
		<form action="saveinst.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">


			<div class="row">
				<div class="col-md-6">

					<select id="institucion" name="institucion">
						<option value="nombre_inst">Seleccione una Institución&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
						<?php
						$inst="SELECT * FROM c_institucion";
						$resp=pg_query($inst);
						while ($select=pg_fetch_assoc($resp)) {
							$id=$select['id'];
							$name=$select['nombre_inst'];
							echo "<option id='nombre_inst' name='nombre_inst' value=".$id.">".$name."</option>";

						} 
						?>
					</select>	

				</div>
				<div class="col-md-3 col-md-offset-3">
					<button class="btn btn-success arrr" data-toggle="modal" data-target="#window" name ="btnadd"><i class="fa fa-plus"></i> Agregar Instituci&oacute;n</button>
				</div>



			</div>	  					

			<div id="formulario" class="control-group" >
			<br>
			<input class="form-control" id="clave_inst" name="clave_inst" placeholder="Clave de la Institutción" type="text" disabled="off" />
			<br>	
			<textarea class="form-control" id="direccion_inst" name="direccion_inst" placeholder="Dirección" type="text" disabled="off" /></textarea>
			<br>
			<input class="form-control" id="email_inst" name="email_inst" placeholder="Correo electr&oacute;nico" type="email" disabled="off" />
			<br>
			<input class="form-control" id="nombre_dir" name="nombre_dir" placeholder="Nombre del director" type="text" disabled="off" />
			<br>
			<input class="form-control" id="email_dir" name="email_dir" placeholder="Correo del Director" type="email" disabled="off"/>		
			<br>
			<button class="btn btn-lg " id="color" type="submit" href="saveinst.php" name="btnguardar"><i class="fa fa-floppy-o"></i> Guardar</button>

		</form>
		<form action="save_c_inst.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
			<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Ingresa los datos de la instituci&oacute;n</h3>
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


</div>

</body>
</html>