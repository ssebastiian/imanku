<?php
     function conexion(): mysqli {
        $db = mysqli_connect('localhost','root','','elecciones');
        session_start();
        if(!$db){
            echo"Error en la Conexion";
            exit;
        }
        return $db;
    } 
?>