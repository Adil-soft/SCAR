<?php
//conexion base de datos:
require("config-sql.php");
// Insert nuevo asistente a los eventos:
echo "Hola ";
if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    $dni_nie_pasaporte= $_POST['idpersona'];
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $profesion= $_POST['profesion'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $edad=$_POST['edad'];
    /********************************* */
     //guardar imagenes en la direcicon del proyecto scar/mages(carpetas de imagenes):
     //$directorio = dirname("images");
     $nombreImagenOriginal =$_POST['foto'];
     echo $nombreImagenOriginal;
     echo "directorio temp";
     echo $directorioTemporal;
     $directorio="images/";
     $destino= $directorio.$nombreImagenOriginal;
     //subir la imagen al directorio del proyecto scar:

     move_uploaded_file($directorioTemporal,$destino);
     //move_uploaded_file($directorioTemporal,'images/'.$nombreImagenOriginal);
     chmod('images/'.$nombreImagenOriginal, 0777);
     //subir imagen a la base de datos:
     //insertarImagen(1,$conn,$destino);
    /************************************* */
    $id=1;
    $sql = $conn->prepare("INSERT INTO Matriculados(dni_nie_pasaporte,nombre,apellido,profesion,edad,sexo,correo,foto) VALUES(?,?,?,?,?,?,?,?);");
    $sqlResult=$sql->execute([$dni_nie_pasaporte,$nombre,$apellido,$profesion,$edad,$sexo,$correo,$destino]);
    $conn=NULL;
}
?>