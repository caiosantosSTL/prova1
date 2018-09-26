
<!DOCTYPE html>
<html>
<head>
	<title>Sesion</title>
</head>
<body>
	<?php 
	//<input type="text" name="nomox" placeholder="Nome complet"><br><br>
	 ?>
	<h1>Login area</h1>
	<form method="post" action="processologin.php">
		
		<fieldset><legend>Login</legend>
		
		<input type="text" name="user" placeholder="Seu nome usuario" required autofocus><br><br>
		<input type="password" name="pasvort" placeholder="Sua senha" required ><br><br>


		<input type="submit" value="Entar">

		<br><br>
		 <a href="cadastro.php">Ou se cadastre</a>

		</fieldset>
		
	</form>

	<?php 
		/*
			Pagina principal, colocar dados que serao
			levados para a pagina processologin.php
			na qual as informacoes colocads
			vao para as variaveis em php

		*/
	 ?>

</body>
</html>


<?php 




 ?>