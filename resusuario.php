<?php 
	include "conect.php";

	$nombre=htmlspecialchars($_POST['nombre'],ENT_QUOTES);
	$usuario=htmlspecialchars($_POST['usuario'],ENT_QUOTES);
	$correo=htmlspecialchars($_POST['correo'],ENT_QUOTES);
	$pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
	$optionsRadios=htmlspecialchars($_POST['optionsRadios'],ENT_QUOTES);
	$query="SELECT * FROM usuarios WHERE usuario='$usuario'";
	$res = pg_query($query);
	$dir = "<a href='127.0.0.1/confirmacion.php'>127.0.0.1/confirmacion.php</a>";

	echo $nombre;
	echo $usuario;
	echo $correo;
	echo $pass;
	echo $optionsRadios;
	echo $res;
	echo $dir;

	$res=pg_query($query);
	$num =pg_num_rows($res);
	if ($num==0){
		$query2= "INSERT INTO usuarios(nombre, usuario, correo, pass, rol) VALUES('$nombre','$usuario','$correo','$pass','$optionsRadios')";

		$res=pg_query($query2);
		echo "<script language='JavaScript' type='text/javascript'> alert('Usuario registrado correctamente')</script>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Este nombre de usuario ya esta registrado, porfavor elige otro')</script>";
	}
	$send = mail ( $correo, 'Registo de Proyectos SUAP', 'Te enviamos este mensaje por que hemos recibido una solicitud de ingreso a el registro de proyectos del Instituto Tecnologico de Ciudad Valles si Usted no a solicitado este registro aga caso omiso a este correo en caso contrario ingrese a la siguiente direccion: '. $dir);
	if (!$send) {
		echo "<script language='JavaScript' type='text/javascript'> alert('No debe de salir esto')</script>";
		echo "error";
		//header("location:login.php");
	}
	else{
		header("location:usuarios.php");
	}

?>