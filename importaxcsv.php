<?php
	include('conexa.php');

	if ($_FILES['csv']['size'] > 0) {
		$row = 1;//iteracoes
    	$handle = fopen($_FILES['csv']['tmp_name'],'r');/* fopen */

		while ($data = fgetcsv($handle,1000,",","'"))/*fgetcvs vamos analizr os valores da tabela
		separados por coma*/
		{
			if($row!=1)//interacao si valor no es 0
			//if($data[0])
			{ 
    			//abaixo temos muitas tablas, vamos fazer so com uma
    			$inserInter="INSERT INTO Biopsicosocial.Interno(ID,nombre,apeMat,apePat,alias,sexo,edad,fecNac,lugNac,esco,ocup,anioInter,mesInter,diaInter,delito,cereso,condLegal,IncDel,anioSent,mesSent,diasSent) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]','$data[18]','$data[19]','$data[20]')";
    			$conex->query($inserInter);//poner en query

    			
			}
			$row++;//la iteracao
		}
		echo 'OK';
	}
	$conex->close();
?>