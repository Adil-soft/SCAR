<?php

//modificar evento en  la base de datos scar:
if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    $id = $_POST['id'];
    $nombre= $_POST['nombre'];
    $responsable= $_POST['responsable'];
    $fecha= $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];
    //sentencia de actualizar la base de datos scar:
    $sql_stm ="UPDATE Evento SET nombre='$nombre', responsable='$responsable', fecha='$fecha',direccion='$direccion', descripcion='$descripcion' WHERE id= '$id';";
    $sql = $conn->prepare($sql_stm);
    $sql->execute();
    $conn=NULL;
}
?>