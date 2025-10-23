<?php
    

    DEFINE ('dbuser','root');
    DEFINE ('dbpass','1234');
    DEFINE ('dbserver','localhost');
    DEFINE ('dbname','scar');
    echo "Hola1";
    $con = mysqli_connect(dbserver,dbuser,dbpass,dbname);
     echo "hola2";
    
     if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
        echo "Problema de conexion";
   }
   else echo "conexion exitosa";
    /*
    $server= "localhost";
    $username = "root";
    $pass = "";
    $dbname = "scar";
    echo "hola 1";
    $con= mysqli_connect($server,$username,$pass,$dbname);
    echo "hi";
    //$con=new mysqli($server,$username,$pass,$dbname);
    echo "hola2";
    if ($con->connect_error) {
         die("Conexión fallida: " . $con->connect_error);
        echo "Problema de conexion";
    }
    else echo "conexion exitosa";
    */
?>