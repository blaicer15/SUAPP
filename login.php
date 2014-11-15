<?php 
session_start();

include "conect.php";

if (isset($_POST['entrar'])) {

	$user=htmlspecialchars($_POST['user'],ENT_QUOTES);
	$pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);

	$query="SELECT * FROM usuarios WHERE usuario='$user' and pass='$pass'";
	$res=pg_query($query);
	$num=pg_num_rows($res);

	$query1= "SELECT * FROM usuarios WHERE usuario='$user'";
	$res1=pg_query($query1);
	$nom=pg_fetch_assoc($res1);
	$no=$nom['nombre'];
	$user2=$nom['user'];

	$query2= "SELECT * FROM usuarios WHERE usuario='$user' and pass!='$pass'"; //realiza la consulta del usuario
	$res2=pg_query($query2);//guarda la cadena en la variable res
	$num2 =pg_num_rows($res2);
	
	if($num==1){ //revisa que solo haya un resultado, si los resultados son diferentes a 1 brinca al else.
		$_SESSION['user'] = $no;
		$user = $_SESSION['user'];
			header("Location: index.php?id=$user"); //redirecciona a menu.php
		}
		if($num2==1){
			echo "<script language='JavaScript' type='text/javascript'> alert('¿No eres $no ?')</script>";      
			
		}
		else{
			if ($num==0)
			{
				echo "<script language='JavaScript' type='text/javascript'> alert('Usuario y/o contraseña incorrectos ?')</script>";
			}

		}
	}
	?>
	<?php
	session_start();
	if (isset($_SESSION['user'])) {

		$user = $_SESSION['user'];
		header("Location: index.php?id=$user"); 
	}
	?>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/search.js"></script>
		<script src="js/site.js"></script>
		<script src="js/modal.js"></script>

	</head>
	<body class="container">
		
		<div id="box3" class="col-xs- col-sm-12 col-md-4 col-md-offset-4 well well-sm fondo">
			<div id="" align="center">
				<img src="user.png" class="img-circle" >
			</div>
			<form action="login.php" accept-charset="utf-8" method="post" id="formulario" class="form" role="form">
				<div class="row">
					<div class="col-md-12">
						<br>
						<input class="form-control" type="text"  id="user" name="user" placeholder="Nombre de Usuario" />
						<br>
						<input class="form-control" type="password" id="pass" name="pass" placeholder="Contraseña" />
						<br>
						<div class="col-md-12 well-md">
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Iniciar Sesión</button>
							<!--<a type="button" data-toggle="modal" data-target="#window" name ="btnadd">¿Olvido su contraseña?</a>-->
							<button type="button" class="btn btn-link btn-blok"name ="btnadd" data-target="#window" data-toggle="modal" >¿Olvido su contraseña?</button>
						</div>
					</div>
				</div>
			</form>
			
				<div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Proporcione el mismo correo que uso por primera vez</h3>
						</div>

						<form enctype="multipart/form-data" action="correo.php" method="post" id="form2" accept-charset="UTF-8">
						<div class="modal-body">
							<input class="form-control" name="email" id="email" placeholder="Introduzca aquí su correo" type="text" required/>		
							<br>
						</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-success" value="send" title="Enviar"><i class="fa fa-floppy-o"></i> Enviar</button>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	
	</body>
	</html>