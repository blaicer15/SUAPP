
<?php

$host="127.0.0.1";
$user="postgres";
$dbname="inventario";
$pass="";

$conexion = pg_connect("host=".$host." user=".$user." dbname=".$dbname." password=".$pass);
$query="Select * from equipo";
$result= pg_query($conexion, $query);

while ($row = pg_fetch_assoc($result)) {
	$municipios[]=$row['marca'];
	
}

$texto = strtolower(trim($_POST["marca"]));

$sugerencias = array();
foreach($municipios as $indice => $nombre) {
  if(preg_match('/^('.$texto.')/i',$nombre)) {
    $sugerencias[] = $nombre;
    if(count($sugerencias)>20) { break; }
  }
}

if(isset($_GET["modo"]) && $_GET["modo"] != null) {
	$modo = $_GET["modo"];
}
else {
	$modo = "json";
}

if($modo == "ul") {
	if(count($sugerencias)>0) {
	  echo "<ul>\n<li>";
	  echo implode($sugerencias, "</li>\n<li>");
	  echo "</li>\n</ul>";
	}
	else {
	  echo "<ul></ul>";
	}
}
else {
	if(count($sugerencias)>0) {
	  echo "[ \"";
	  echo implode($sugerencias, "\", \"");
	  echo "\"]";
	}
	else {
	  echo "[]";
	}
}
?>
