<?php 
    require("config-sql.php");
    //LEER DATOS DE LOS MATRICULADOS EN EL EVENTO DE LA BASE DE DATOS SCAR:
        $sql = $conn->prepare('SELECT *FROM Matriculados;');
        $sql->execute();
    //cerrar conexion de base de datos:
    $conn=NULL;
?>