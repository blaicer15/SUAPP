<?php 
	include "conect.php";

	if (isset($_POST['btnRF'])) {
		$partsol=htmlspecialchars($_POST['partsol'],ENT_QUOTES);
		$montoxc1=htmlspecialchars($_POST['montoxc1'],ENT_QUOTES);
		$montoxc2=htmlspecialchars($_POST['montoxc2'],ENT_QUOTES);				
		$montodgest=htmlspecialchars($_POST['montodgest'],ENT_QUOTES);				
		$montotecpart=htmlspecialchars($_POST['montotecpart'],ENT_QUOTES);				
		$montoeco=htmlspecialchars($_POST['montoeco'],ENT_QUOTES);				
		$montoinst=htmlspecialchars($_POST['montoinst'],ENT_QUOTES);				
		$montootrasinst=htmlspecialchars($_POST['montootrasinst'],ENT_QUOTES);				
		$presupuesto=htmlspecialchars($_POST['presupuesto'],ENT_QUOTES);				
		$montosol=htmlspecialchars($_POST['montosol'],ENT_QUOTES);				
		$total=htmlspecialchars($_POST['total'],ENT_QUOTES);				

	}
 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Recursos Financieros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div id="box3" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 well well-sm">
			<div id="font1">
				<br>
				<h1 align="center"><b>Recursos Financieros</b></h1>
			</div>

			<div class="col-md-6">
				<label>Partida solicitada:</label><br>
				<input class="form-control" name="partsol" placeholder="" type="text"/>
				<label>Monto por cuatrimestre para suministros y materiales:</label><br>
				<input class="form-control" name="montoxc1" placeholder="$0.00" type="text"/>	
				<label>Monto por cuatrimestre para servicios generales:</label><br>
				<input class="form-control" name="montoxc2" placeholder="$0.00" type="text"/>	
				<label>Monto solicitado DGEST:</label><br>
				<input class="form-control" name="montodgest" placeholder="$0.00" type="text"/>	
				<label>Monto del tecnológico participante:</label><br>
				<input class="form-control" name="montotecpart" placeholder="$0.00" type="text"/>
				<label>Apoyo económico:</label><br>
				<input class="form-control" name="montoeco" placeholder="$0.00" type="text"/>
				
			</div>

			<div class="col-md-6">	
				<label>Monto de la institución:</label><br>
				<input class="form-control" name="montoinst" placeholder="$0.00" type="text"/>
				<label>Monto de otras instituciones:</label><br>
				<input class="form-control" name="montootrasinst" placeholder="$0.00" type="text"/>
				<label>Presupuesto:</label><br>
				<input class="form-control" name="presupuesto" placeholder="$0.00" type=""/>
				<label>Monto solicitado:</label><br>
				<input class="form-control" name="montosol" placeholder="$0.00" type=""/>
				<label>Total:</label><br>
				<input class="form-control" name="total" placeholder="$0.00" type=""/>
				<br>
				<button class="btn btn-lg" id="color" type="button" name="btnRF">Guardar</button>
			</div>		
		</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>