<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>


<?php 

include_once("conexa.php");

$filtro=isset($_GET['filtro'])?$_GET['filtro']:"";

$sql="SELECT * FROM clientus where nombre like '%$filtro%' ";
$consul=mysqli_query($conex, $sql);
$registri=mysqli_num_rows($consul);



 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<style type="text/css">
	.roll{
	background-color: white;
    width: 540px;
    height: 300px;
    overflow: scroll;
	}

</style>
<body>

	<div class="container">
		<nav>
			<ul class="menu">
				<a href="inicio.php"><li>Registro</li></a>
				<a href="listax.php"><li>consultas</li></a>
				<a href="logout.php"><li>Sair Sesion</li></a>
			</ul>
		</nav>
		<section>
			<h1>Consultas</h1><hr><br><br>
			<form method="get" action="">
				Filtro por nombre: <input type="text" name="filtro"
				class="campo" required autofocus>
				<input type="submit"  value="pesquisa" class="btn">

			</form>

			<form method="post" action="delet.php">
				ID para deletar: <input type="text" name="del"
				class="campo" required autofocus>
				<input type="submit"  value="Deletar" class="btn">

			</form>

				<?php 
					echo "$registri registros encontrados";
					echo "<br><br>";
				 ?>
			<div class="roll">

			<?php 
				
				while($iRegistri=mysqli_fetch_array($consul)) { 

					
					$codig=$iRegistri[0];
					$nomo=$iRegistri[1];
					$edadx=$iRegistri[2];
					$emailx=$iRegistri[3];
					$libb=$iRegistri[4];

					echo "<article>";

					echo "id: $codig<br>";
					echo "nombre: $nomo<br>";
					echo "edad: $edadx<br>";
					echo "email: $emailx<br>";
					echo "libro id: $libb<br>";
					echo "<br>";
					

					echo "</article>";

				
				}
				

				mysqli_close($conex);
			 ?>
			 </div>
			
		</section><form method="post" action="delet.php"></form>
	</div>
</body>
</html>



 <?php 

}//fecha do else


  ?>