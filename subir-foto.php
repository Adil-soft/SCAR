<?php
    require("subir-imagen-sql.php");

echo "Hola1";
    if(isset($_POST['submit'])){
        echo "Hola2";
        if(!empty($_FILES['foto']['name'])){
            //validar el tipo de imagen:
            echo "aqui3";
            $extensionPermitida = array("jpg", "jpeg", "png", "JPG", "PNG");
            //obtener la extension de la imagen:
            echo "Hola4";
            $directorioTemporal= $_FILES['foto']['tmp_name'];
            $tipoImagen= mime_content_type($directorioTemporal);
            echo "........./";
            echo $tipoImagen;
            echo "/........";
            echo "hola5";
           
            //comprobar si el tipo de imagen es correcto:
            if (($tipoImagen =="image/png")|| ($tipoImagen =="image/PNG") || ($tipoImagen =="image/jpeg") 
                || ($tipoImagen =="image/jpg") || ($tipoImagen =="image/JPG")){
                 echo "correcto";
                 //guardar imagenes en la direcicon del proyecto scar/mages(carpetas de imagenes):
                $directorio = dirname("images");
                 $nombreImagenOriginal =$_FILES['foto']['name'];
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
                 echo $ruta_imagen;
                 insertarImagen(1,$conn,$destino);
                echo "HOl7";
    
             }else echo "la extension de la imagen, no es correcto. por favor intentalo de nuevo.";
    }else echo "por favor sube una imagen.";
}

?>