<?php
$host = '127.0.0.1';
$db = 'suap';
$user='postgres';
$pass= '';

$con=pg_connect("host=$host dbname=$db user=$user");
if($con)
	
{

}
else{
	echo"error";
}
?>
