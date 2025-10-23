<?php 
    //conexion de la base de datos:
    include_once("config-sql.php");
    //buscar persona en la base de datos scar:
    if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $id = $_POST['buscar'];
        $query="SELECT * FROM Matriculados WHERE dni_nie_pasaporte='$id';";
        $sql = $conn->prepare($query);
        $sql->execute();
        //cerrar conexion:
        $conn=NULL;
    }
?>