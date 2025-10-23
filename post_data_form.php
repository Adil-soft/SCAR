<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

  echo "Hola mundo";
  echo "hola1";
$servername = "localhost";
$database = "scar";
$username = "root";
$password = "1234";
// Create connection
//phpinfo();
if ($bs->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
    $sentencia = $bs->prepare('select * from foo',
        array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
} else {
    die("mi aplicación sólo funciona con mysql; debería usar \$sentencia->fetchAll() en su lugar");
}
$nombre="jose";
$fecha="1/22/85";
$ubicacion="cordoba";
$descripcion="hola mundo";
$sql = "INSERT INTO Evento(nombre, fecha, ubicacion, descripcion) VALUES ('$nombre', '$fecha', '$ubicacion', '$descripcion')";
echo "hola2";
// Check connection
echo "Connected successfully";

?>
