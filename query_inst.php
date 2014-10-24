<?php 
include "conect.php";
//$nombre = addslashes(htmlspecialchars($_POST["nombre"]));
$id = $_GET['id'];
//echo $id;
/*Crear un array con una conosulta sql*/
$consulta="SELECT * FROM c_institucion WHERE id='$id'";
$res=pg_query($consulta) or die("Fallo consulta");
$row=pg_fetch_assoc($res);
//$direccion_inst=$row['direccion_inst'];
//$email_inst=$row['email_inst'];
//$nombre_dir=$row['nombre_dir'];
//$email_dir=$row['email_dir'];

echo json_encode($row);
?>