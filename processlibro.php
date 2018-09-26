<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>



<?php 

include_once ("conexa.php");

$nome=$_POST['nome'];
$edad=$_POST['idad'];
$email=$_POST['email'];
$libad=$_POST['liad'];

$sql="INSERT INTO clientus (nombre, edad, email, libro_add) 
VALUES ('$nome', '$edad', '$email', '$libad')";

$save=mysqli_query($conex, $sql);

//$line=msqli_affected_rows($conex);

mysqli_close($conex);


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<div class="container">
		<nav>
			<ul class="menu">
				<a href="inicio.php"><li>cadastro</li></a>
				<a href="listax.php"><li>consultas</li></a>
				<a href="logout.php"><li>Sair Sesion</li></a>
			</ul>
		</nav>
		<section>
			<h1>Confirmacao de Cadastro</h1><hr>
			<br><br>

			<?php

				/*if($line==1){
					print "Cadastro feito com exito!!!";
				}else{
					print "Nao teve exito, ja tem um usuario com esse email";
				}*/

			?>

			
		</section>
	</div>
</body>
</html>

 <?php 

}//fecha do else


  ?>
