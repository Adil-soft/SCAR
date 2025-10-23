<?php
    //conexion a la base de datos scar:
    require("config-sql.php");
    /**
     * Summary of insertarImagen
     * @param mixed $id
     * @param mixed $conn
     * @param mixed $ruta_imagen
     * @return void
     */
    function insertarImagen($id, $conn, $ruta_imagen){
        //id de la persona:
        $idpersona = $id;
        echo "aqui";
        $query = "INSERT INTO Matriculados (foto) VALUES ('$ruta_imagen');";
        $sql=$conn->prepare($query);
        $sql->execute();
        $conn=NULL;
    }
   

?>
