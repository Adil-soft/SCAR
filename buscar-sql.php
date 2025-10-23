<?php 
    //conexion de la base de datos:
    include_once("config-sql.php");
    //obtencion del id del evento y buscarlo en la base de datos scar:
    if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $id = $_POST['buscar'];
        $query="SELECT * FROM Evento WHERE id='$id';";
        $sql = $conn->prepare($query);
        $sql->execute();
        //cerrar conexion:
        $conn=NULL;
    }
?>
