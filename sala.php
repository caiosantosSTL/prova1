<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<?php 
 		echo "bem vindo a sala principal ".$_SESSION['nome']."<br>";
 		echo "<a href='produt.php'>Produt</a><br>";
 		echo "<a href='logout.php'>Sair</a>";
 	 ?>

 	 <?php 
 	 	/*
			essa sera a sala onde so quem tem login pode entrar

			e tambem essa sala tem uma sessao, com a condicao de que, se os valores de login nao foram colocados, a pagina vai te levar para o index de login

			isso serve para evitar entrar nessa pagina, por meio de escrito de link. somente podera acessar essa pagina por meio de link, se tal usuario fez o login, logo tal acao sera permitida.

			nessa pag, tem a direcao para sair e destruir a sessao
			echo "<a href='logout.php'>Sair</a>";
 	 	*/

 	  ?>
 
 </body>
 </html>

 <?php 

}//fecha do else


  ?>