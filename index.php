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
			<h1>Cadastro de Clientes</h1><hr><br><br>
			<form method="post" action="process.php">
				<input type="submit" value="salvar" class="btn">
				<input type="reset" value="limpar" class="btn">
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