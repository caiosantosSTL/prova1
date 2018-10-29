<?php 
/*
include_once("conexa.php");

$sql="SELECT * FROM clientus";
$consul=mysqli_query($conex, $sql);
$registri=mysqli_num_rows($consul);


while($iRegistri=mysqli_fetch_array($consul)) { 
					$codig=$iRegistri[0];
					$nomo=$iRegistri[1];
					$edadx=$iRegistri[2];
					$emailx=$iRegistri[3];
					$libb=$iRegistri[4];


	$obj_phpexl->getActiveSheet()->setCellValue('A1', '$codig');
	$obj_phpexl->getActiveSheet()->setCellValue('B1', '$nomo');
	$obj_phpexl->getActiveSheet()->setCellValue('C1', '$edadx');
	$obj_phpexl->getActiveSheet()->setCellValue('D1', '$emailx');
	$obj_phpexl->getActiveSheet()->setCellValue('E1', '$libb');

}

*/
 ?>






<?php 


require 'Classes/PHPExcel.php';

$obj_phpexl=new PHPExcel();

$obj_phpexl->getProperties()
->setCreator('Meu')
->setTitle('Test');

$obj_phpexl->setActiveSheetIndex(0);
$obj_phpexl->getActiveSheet()->setTitle('Unesma');

$obj_phpexl->getActiveSheet()->setCellValue('A1', 'Saluto mondo');
$obj_phpexl->getActiveSheet()->setCellValue('B1', 'To esas nur test');
$obj_phpexl->getActiveSheet()->setCellValue('C1', 'Me volas savar');
$obj_phpexl->getActiveSheet()->setCellValue('A2', '1');
$obj_phpexl->getActiveSheet()->setCellValue('A3', '2');

//guardar

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="Excel.xls"');
header('Cache-Control: max-age=0');

$obj_ler=PHPExcel_IOFactory::createWriter($obj_phpexl, 'Excel5');
$obj_ler->save('php://output');



 ?>