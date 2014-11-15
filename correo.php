<?php 
include "conect.php";
$email = $_POST['email'];
$query="SELECT * FROM usuarios where correo='$email'";
$res = pg_query($query);
$contra = pg_fetch_array($res);
$pass = $contra['pass'];
$correo = $contra['correo'];

echo "Correo recibido: ".$email."<br>";
echo "Este es el correo: ".$correo."<br>";
echo "Esta es la contrase&ntilde;a: ".$pass."<br>";

$send = mail ( $email, 'Recuperacion de Contraseña de SUAP', 'Te enviamos este mensaje por que hemos recibido una solicitud de recuperacio de contraseña. Su usuario es: '.$correo.' y su contraseña es: '. $pass);
if (!$send) {
	echo "<script language='JavaScript' type='text/javascript'> alert('No debe de salir esto')</script>";
	echo "error";
	//header("location:login.php");
}
else{
	echo "<script language='JavaScript' type='text/javascript'> alert('usuario registrado')</script>";	
}
	?>

<script>
alert('Revisa tu bandeja de entrada');
window.location.href='login.php';
</script>
<?php
}
?>