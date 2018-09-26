<?php 
session_start();
if (!$_SESSION['usuario']) {
	header("Location: index.php");
}else{
	echo "Os produtos lindos meu amigo/a ".$_SESSION['nome']."<br>";
	echo "<a href='sala.php'>Voltar</a>";

	
}

 ?>