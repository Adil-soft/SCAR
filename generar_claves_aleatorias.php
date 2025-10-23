<?php
    echo "Hola mundo\n";
    function generar_claves_sesion_appiam()
    {   
        //definir la longitud de clave de la APPIAM:
        $longitud_clave=2;
        //funciona openssl para generar claves seguras y encriptas en binario:
        $clave_bytes = openssl_random_pseudo_bytes($longitud_clave, $cstrong);
        if($clave_bytes != false){
            //convertir la clave de binarioa a hexadecimal para el usuario:
            $clave_hex = bin2hex($clave_bytes);
            //devolver la clave en hexadecimal para evniarlo al asistente por correo:
            return $clave_hex;

        }else{
            echo "Problema para generar claves de usuarios para la APPIAM.\n";
        }
    }
    $clave=generar_claves_sesion_appiam();
    echo $clave;
?>