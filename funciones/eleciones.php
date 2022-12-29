<?php
require '../conexion.php';
$db=conexion();
    $json = file_get_contents('elections.json');
    $data = json_decode($json);

    foreach ($data as $key ) {
       $year = $key->year;
        $democrat = $key->democrat;
        $republic = $key->republic;
        $other = $key->other;
        $codecounty = $key->codecounty;
        
        $consulta= "INSERT INTO election(idelection,year,voteCount,poloticalParty,codecount) VALUE (null,'$year','$democrat','$republic','$codecounty')";
        $resultado =$db->query($consulta);
    }
?>
<h1>ELECIONES SUBIDAS DE FORMA CORRECTA</h1>