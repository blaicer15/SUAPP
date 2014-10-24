<?php 

$resultado = "";
$nombre = addslashes(htmlspecialchars($_POST["nombre"]));

/*Crear un array simulando una consulta a una tabla*/
$array = array("antonio", "pedro", "alberto");
$resultado = array(
	'ok' => false,
	'msg' => "No se encontro $nombre"
);
for ($x = 0; $x < count($array); $x++){
	if ($nombre == $array[$x] ) {
		$resultado['ok'] = true;
		$resultado['msg'] = "Se encontro <b>$nombre</b>";
	}
}

echo json_encode($resultado);
?>