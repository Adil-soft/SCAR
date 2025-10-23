<?php

// Insert nuevo evento:
if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    $id = $_POST['id'];
    $nombre= $_POST['nombre'];
    $responsable= $_POST['responsable'];
    $fecha= $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];
    
    $sql = $conn->prepare("INSERT INTO Evento(id,responsable,nombre,fecha,direccion,descripcion) VALUES(?,?,?,?,?,?);");

    $sqlResult=$sql->execute([$id,$responsable,$nombre,$fecha,$direccion,$descripcion]);
   
     $conn=NULL;
}
?>
