<?php 

include_once("conexa.php");
//conferir login se existe ou nao
$user=$_POST['user'];
$pasvort=$_POST['pasvort'];

$sql="SELECT nomo, nomo_user, senha FROM logina
where nomo_user='$user' and senha='$pasvort'";

$query=mysqli_query($conex, $sql);
$linea=mysqli_affected_rows($conex);

if ($linea>0) {
	session_start();
	$_SESSION['usuario']=$user;//var chave para as demais sessoes, para saber se tal pessoa fez o login e pode acessar a pag principal
	while ($darvalor=mysqli_fetch_array($query)) {//conferir se tal pesso existe no banco de dados
		$nome=$darvalor[0];
		$n_usuario=$darvalor[1];
		$s_usuario=$darvalor[2];
	}
	$_SESSION['nome']=$nome;//valor do nome no banco de dados
	header("Location: inicio.php");//manda para a pagina principal
}else{
	echo "Dados incorretos<br>";
	echo "<a href='index.php'>Voltar</a>";
}

 ?>

 <?php 
 	/*
		os valores colocados na pag html, vao ser colocados dentro das
		variaveis do php

		a condicao if vai analizar se as informacoes sao iguais 
		no que se quer analisar

		se as condicoes forem corretas, a sessao eh iniciada

		$_SESSION['usuario']=$user; a variavel de sessao capta o valor do nome de usuario

		header("Location: sala.php"); vai levar para uma outra pagina, que sera a pagina que so quem tem login pode entrar

 	*/

  ?>