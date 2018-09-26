<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="process2.php">
</head>
<body>	

	<div class="container">
		<nav>
			<ul class="menu">
				<a href="inicio.php"><li>Registro</li></a>
				<a href="listax.php"><li>consultas</li></a>
				<a href="douloud.php"><li>Dowload</li></a>
				<a href="logout.php"><li>Sair Sesion</li></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Clientes</h1><hr><br><br>
			<form method="post" action="processlibro.php">
				<input type="submit" value="salvar" class="btn">
				
				<br><br>

				Nombre <br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>

				Edad <br>
				<input type="text" name="idad" class="campo" maxlength="3" required ><br>

				Email <br>
				<input type="email" name="email" class="campo" maxlength="80" required ><br>

				Libro add <br>
				<input type="text" name="liad" class="campo" maxlength="1" required ><br>

			</form>
		</section>
	</div>
</body>
</html>


 <?php 

}//fecha do else


  ?>



