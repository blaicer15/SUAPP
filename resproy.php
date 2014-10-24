<?php
	session_start();
	include "conect.php";
	
	$query="Select id,titulo_proyecto FROM p_i";
    $res=pg_query($query);

    $cont=0;
    while ($row=pg_fetch_array($res)) {
    	$_SESSION["pr_id"][$cont]=$row["id"];
    	$_SESSION["pr_titulo"][$cont]=$row["titulo_proyecto"];
    	//echo $_SESSION['pr_titulo'][$cont];
    	$cont++;
    }
    $_SESSION["cont_num"]=$cont;
?>