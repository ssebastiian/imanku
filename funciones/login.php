<?php
 require '../conexion.php';
 $db=conexion();
 $usuarios =$db->query("SELECT email,clave FROM coordinador WHERE email='".$_POST['correo']."'AND clave='".$_POST['clave']."'");

 if($usuarios->num_rows == 1){
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false,'tipo'=> $datos['email']));
    $_SESSION['CORREO']= $datos['email'];
    
 }else{
    echo json_encode(array('error'=> true));
 }

 $db->close();
?>