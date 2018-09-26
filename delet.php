
<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>

<?php  

include("conexa.php");

$delet=$_POST['del'];

//$sql2="SELECT id_clt FROM clientus WHERE nombre='$delet'";
$sql2="SELECT id_clt FROM clientus WHERE id_clt='$delet'";

$qery=mysqli_query($conex, $sql2);

if ($re=mysqli_fetch_array($qery)) {
	
	mysqli_query($conex, "DELETE FROM clientus WHERE id_clt='$delet'");
	echo "Datos eliminados";
	header("Location: inicio.php");
}else{
	echo "Datos no eliminados";
}



?>

 <?php 

}//fecha do else


  ?>