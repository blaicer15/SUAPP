<!DOCTYPE html>
<html>
<head>
	<!--<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<title>Enviar por AJAX</title>
	<script>
	$(function(){
		$("#btn-enviar").click(function(){
			var url = "dame-datos.php";
			$.ajax({
				type:"POST",
				url:url,
				data: $("#formulario").serialize(),
				dataType: 'json',
				success: function(data){
					$("#nombre_inst").val(data.msg);
					console.log(data);
				}
			});
			return false;
		});
	});	
	</script>
</head>
<body>
<form method="post" id="formulario">

Introduce un nombre: <input type="text" name="nombre">
<input type="text" id="nombre_inst" name="nombre_inst">
<input type="button" id="btn-enviar" value="Enviar">
</form>
<div id="resultado"></div>
</body>
</html>