<?php
 require('config-sql.php');
 echo "hola";
 $id=11;
$query = "SELECT foto FROM Matriculados WHERE id = $id;";
   $sql= $conn-> prepare($query);
   $sql-> execute();
echo "hola2";
$fila = $sql->fetch(PDO::FETCH_ASSOC);
echo $fila['foto'];
$ruta='scar/logo.png';
/*
if ($ruta !=NULL) {
 
    echo '<html><img src='.$ruta.' alt="Imagen">';
} else {
    echo 'No se encontró la imagen en la base de datos.';
}
*/
?>