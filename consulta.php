<?php 

include_once("conex.php");

$sql="SELECT * FROM clientus ";
$consul=mysqli_query($conex, $sql);
$registri=mysqli_num_rows($consul);

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
			<h1>Consultas</h1><hr><br><br>
			<?php 
				echo "$registri registros encontrados";
			 ?>
			
		</section>
	</div>
</body>
</html>