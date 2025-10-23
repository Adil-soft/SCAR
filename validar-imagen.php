<?php 

/**
 * Summary of validar_foto_identificacion
 * @return $valido int
 */
function validar_foto_identificacion($foto){
    if(!empty($_FILES[$foto]['name'])){
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
            /*$directorio = dirname("images");
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
             //insertarImagen(1,$conn,$destino);
            echo "HOl7";*/
            return $valido = 1;

         }else echo "la extension de la imagen, no es correcto. por favor intentalo de nuevo.";
    }else{
        echo "<script>alert('Por favor, Insertar una imagen.');</script>";

            return $valido = 0;
        }


}
       
     
       


?>