<?php
$host="localhost"; 
$user="root"; 
$pass="";
$db="lamar"; 

$con=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){

	echo "Error al conectar ".mysqli_connect_error();
}

mysqli_set_charset($con, "utf8");

?>