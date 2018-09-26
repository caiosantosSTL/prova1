<?php 

//require_once 'conexa.php';
include_once ("conexa.php");
//criacao de cadastro
$nomo=$_POST['nomox'];
$user=$_POST['user'];
$pasvort=$_POST['pasvort'];

$sql="INSERT INTO logina(nomo, nomo_user, senha)
 VALUES('$nomo', '$user', '$pasvort')";
$query=mysqli_query($conex, $sql);

$linea=mysqli_affected_rows($conex);

if ($linea>0) {
	echo "Cadastro feito com sucesso<br>";
	echo "<a href='index.php'>Tela login</a>";
}else{
	echo "Tal nome de user ja existe<br>";
	echo "<a href='cadastro.php'>Outra vez</a>";
}

 ?>