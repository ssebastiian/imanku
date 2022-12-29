<?php
require '../PHPExcel/Classes/PHPExcel.php';
require '../conexion.php';
$db=conexion();
$archivo = 'counties.xlsx';
//carga la hoja de excel
$excel = PHPExcel_IOFactory::load($archivo);

//carga la hoja de calculo que deseamos
$excel-> setActiveSheetIndex(0);

//obtiene el numero de las filas
$numerofila = $excel -> setActiveSheetIndex(0)->getHighestRow();

for ($i=2; $i <= $numerofila ; $i++) { 
   $codestate = $excel -> getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
   $codecounty = preg_replace('([^A-Za-z0-9])','',$excel -> getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
   $county = preg_replace('([^A-Za-z0-9])','',$excel -> getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
   $population = preg_replace('([^0-9])','',$excel -> getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
   $area = $excel -> getActiveSheet()->getCell('E'.$i)->getCalculatedValue();

   $consulta= "INSERT INTO country(id,codecountry,county,population,area) VALUE ('$codestate','$codecounty','$county','$population','$area') ";
   $resultado =$db->query($consulta);
}

?>

<h1>COUNTIES SUBIDAS DE FORMA CORRECTA</h1>