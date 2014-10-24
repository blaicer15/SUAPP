<?php 
	include "conect.php";
	
	$clave_inst=htmlspecialchars($_POST['clave_inst'],ENT_QUOTES);
	$direccion=htmlspecialchars($_POST['direccion_inst'],ENT_QUOTES);
	$email=htmlspecialchars($_POST['email_inst'],ENT_QUOTES);
	$email_dir=htmlspecialchars($_POST['emaildir_c_inst'],ENT_QUOTES);	
	$nombre_director=htmlspecialchars($_POST['nombre_dir'],ENT_QUOTES);


	$consulta="SELECT * FROM c_institucion WHERE email_inst='$email'";
	$res=pg_query($consulta) or die("Fallo consulta");
	$row=pg_fetch_assoc($res);
	$nombre_inst=$row['nombre_inst'];
	
	echo $clave_inst."<br>";
	echo $nombre_inst."<br>";
	echo $nombre_director."<br>";
	echo $direccion."<br>";
	echo $email."<br>";
	echo $email_dir."<br>";
	
	$query="INSERT INTO institucion(clave_inst, nombre_inst, nombre_dir, direccion_inst, email_inst, email_dir)
	VALUES ('$clave_inst','$nombre_inst','$nombre_director','$direccion','$email','$email_dir')";

	$res=pg_query($query);
	if($res){
		echo "<script language='JavaScript' type='text/javascript'> alert('Informacion guardada correctamente')</script>";
	}else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Error al guardar!!')</script>";
	}
?>