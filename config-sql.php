<?php
$server= "127.0.0.1";
$user = "root";
$pass= "1234";
$dbname = "scar";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $error) {
    echo "Error de conexión: " . $error->getMessage();
}

?>