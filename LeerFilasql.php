<?php
/**
 * Summary of Leer_fila
 * @param mixed $conn
 * @return mixed
 */
function Leer_fila($conn){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql= $conn->query("SELECT * FROM Evento WHERE id='$id';");
        $fila = $sql->fetch(PDO::FETCH_ASSOC);
        return $fila;
    }


}
   
?>