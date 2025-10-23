<?php
/**
 * Summary of Leer_fila
 * @param mixed $conn
 * @return mixed
 */
function Leer_dato_matriculado($conn){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql= $conn->query("SELECT * FROM Matriculados WHERE id='$id';");
        $fila = $sql->fetch(PDO::FETCH_ASSOC);
        return $fila;
    }


}
   
?>