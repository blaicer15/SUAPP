<?php 
include "conect.php";
/*$correo=$_POST['email'];
echo "$correo";*/
$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
$query="SELECT usuario FROM usuarios where correo='$email'";
$query2="SELECT pass FROM usuarios where correo='$email'";
$res = pg_query($query);
$mail = pg_fetch_array($res);
$mail = $mail['usuario'];
$res2 = pg_query($query2);
$contra = pg_fetch_array($res2);
$contra = $contra['pass'];

echo "$email"."<br>";
echo "$query"."<br>";
echo "$query2"."<br>";
echo "$res"."<br>";
echo "$res2"."<br>";
echo "$email"."<br>";
echo "$mail"."<br>";
echo "$contra"."<br>";

$send = mail ( $email, 'Recuperar tu contrase&ntilde;a', 'Te enviamos este mensaje por que hemos recibido una solicitud de recuperacion de contrasena y nombre de usuario tus datos son: '.$mail.' y la contraseña es: '.$contra);
if (!$send) {
	echo "<script language='JavaScript' type='text/javascript'> alert('Rebisa tu bandeja de Entrada')</script>";
	echo "error";
	//header("location:login.php");
}else{
	?>

<script>
alert('Revisa tu bandeja de entrada');
window.location.href='login.php';
</script>
<?php
}
?>