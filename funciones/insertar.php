<?php 
 require '../conexion.php';
 $db=conexion();
 $yaer = $_POST['year'];
 $political = $_POST['political'];
 $contry = $_POST['contry'];
 $votos = $_POST['votos'];

 $insercion = "INSERT INTO election (year,voteCount,poloticalParty,codecount) VALUES ('{$yaer}','{$political}','{$contry}','{$votos}')";
  
  if($db->query($insercion)){
    echo json_encode(array('error'=> false));
  }else{
    echo json_encode(array('error'=> true));
  }

  $db->close();
?>