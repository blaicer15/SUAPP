<?php 
	include "conect.php";
	
	$nombre_inst=htmlspecialchars($_POST['nombre_inst'],ENT_QUOTES);
	$apoyo=htmlspecialchars($_POST['apoyo'],ENT_QUOTES);
	$nombre_director=htmlspecialchars($_POST['nombre_dir'],ENT_QUOTES);
	$direccion=htmlspecialchars($_POST['direccion_inst'],ENT_QUOTES);
	$infraestructura=htmlspecialchars($_POST['infraestructura'],ENT_QUOTES);
	$email=htmlspecialchars($_POST['email_inst'],ENT_QUOTES);
	$monto_inst=htmlspecialchars($_POST['monto_inst'],ENT_QUOTES);
	$monto_otras=htmlspecialchars($_POST['monto_otras'],ENT_QUOTES);

	/*
	$consulta="SELECT * FROM c_institucion WHERE email_inst='$email'";
	$res=pg_query($consulta) or die("Fallo consulta");
	$row=pg_fetch_assoc($res);
	$nombre_inst=$row['nombre_inst'];
	*/

	echo $nombre_inst."<br>";
	echo $apoyo."<br>";
	echo $nombre_director."<br>";
	echo $direccion."<br>";
	echo $infraestructura."<br>";
	echo $email."<br>";
	echo $monto_inst."<br>";
	echo $monto_otras."<br>";

	$query="INSERT INTO institucion(nombre_inst, apoyo_eco, nombre_dir, direccion_inst, infraestructura_inst, email_inst, monto_inst, monto_otras)
	VALUES ('$nombre_inst','$apoyo','$nombre_director','$direccion','$infraestructura','$email','$monto_inst','$monto_otras')";

	$res=pg_query($query);
	if($res){
		echo "<script language='JavaScript' type='text/javascript'> alert('Informacion guardada correctamente')</script>";
	}else{
		echo "<script language='JavaScript' type='text/javascript'> alert('Error al guardar!!')</script>";
	}
?>