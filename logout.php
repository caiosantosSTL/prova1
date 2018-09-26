<?php 

session_start();
session_destroy();
header("Location: index.php");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Log fora</title>
 	<?php 
 		/*
			essa pagina vivera por segudos, pois ela vai ser destruida, ou seja, a sessao vai ser criada e logo destruida.

			no momentp que ela for destruida, vai te encaminhar para a pagina de login.

			mesmo sistema usado em varias paginas web, com sistema de login

 		*/
 	 ?>
 </head>
 <body>
 
 </body>
 </html>