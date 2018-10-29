<?php 
session_start();

if(!$_SESSION['usuario']){
	header("Location: index.php");
}else{



 ?>

 

 <html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      
   
      function drawChart() {


        var data = google.visualization.arrayToDataTable([
          ['Personas', 'Libro'], //elements

         <?php 

		include_once("conexa.php");

		$sql="SELECT nombre, count(libro_add) FROM clientus ";
		$consult=mysqli_query($conex, $sql);


		while($registrix=mysqli_fetch_array($consult)){

			echo "['".$registrix['nombre']."',".$registrix['count(libro_add)']."],";

		}


 		 ?>

          /*[' nombre 1', 1],//horizon
          [' nombre 2', 3],
          [' nombre 3', 4],
          [' nombre 4', 6]*/

        ]);
      


        var options = {
          chart: {
            title: 'Biblioteca',
            subtitle: 'Cual libro popular',
          }
        };


        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
    <a href="inicio.php"><li>Salir aqui</li></a>
    <a href="genpdf.php"><li>Crear pdf</li></a>
  </body>
</html>

<?php 

}
 ?>