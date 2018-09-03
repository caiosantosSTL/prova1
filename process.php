
<?php 

include_once ("conex.php");

$nome=$_POST['nome'];
$edad=$_POST['idad'];
$email=$_POST['email'];
$libad=$_POST['liad'];

$sql="INSERT INTO clientus (nombre, edad, email, libro_add) 
VALUES ('$nome', '$edad', '$email', '$libad')";

$save=mysqli_query($conex, $sql);

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
				<a href="index.php"><li>cadastro</li></a>
				<a href="consulta.php"><li>consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Confirmacao de Cadastro</h1><hr><br><br>

			
		</section>
	</div>
</body>
</html>
