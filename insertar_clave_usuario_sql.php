<?php 
    //INSERTAR CLAVE Y NOMBRE DE USUARIO DE LA APPAIAM:

    /**
     * Summary of insertar_datos_sesion_appaiam
     * @param mixed $conn
     * @param mixed $id_persona
     * @param mixed $usuario
     * @param mixed $clave
     * @return void
     */
    
    function insertar_datos_sesion_appaiam($conn, $id_persona, $usuario, $clave){
        try {
                echo "Hola 11";
                $query = "INSERT INTO accessoAPPIAM(clave, nombre_usuario, id_clave_persona) VALUES (?,?,?);";
                $sql = $conn->prepare($query);
                $sql->execute([$clave, $usuario, $id_persona]);
                echo "Registro insertado correctamente.";
            } catch (PDOException $e) {
             echo "Error al insertar: " . $e->getMessage();
             }

    }




?>