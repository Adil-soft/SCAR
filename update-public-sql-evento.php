<?php
require("config-sql.php");
//modificar evento en  la base de datos scar:
    echo "Hola1";
if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    echo "hola2";
    $id = $_POST['id'];
    $nombre= $_POST['nombre'];
    $responsable= $_POST['responsable'];
    $fecha= $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];
    $publicarsino = $_POST['publicarsino'];
    echo "hola3";
    echo $publicarsino;
    $publicarsino = ($publicarsino==='si') ? 1 : 0;
    //sentencia de actualziar evento a publicado en la base de datos scar:
    $sql_stm ="UPDATE Evento SET nombre='$nombre', responsable='$responsable', fecha='$fecha',direccion='$direccion', descripcion='$descripcion', publicarsino='$publicarsino' WHERE id= '$id';";
    $sql = $conn->prepare($sql_stm);
    $sql->execute();
    $conn=NULL;
}
?>