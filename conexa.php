<?php 

$hostname="localhost";
$user="root";
$senha=null;
$database="datus";

$conex=mysqli_connect($hostname, $user, $senha, $database);

if (!$conex) {
	echo "Falha :(";
}

 ?>