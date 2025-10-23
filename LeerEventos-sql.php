<?php 
//LEER DATOS DEL EVENTO DE LA BASE DE DATOS SCAR:
        $sql = $conn->prepare('SELECT *FROM Evento;');
        $sql->execute();
    //cerrar conexion de base de datos:
    $conn=NULL;
?>