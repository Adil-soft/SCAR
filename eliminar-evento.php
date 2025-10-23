<?php
  require("config-sql.php");
function eliminar_fila($conn){
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql_p_return=$conn->prepare("DELETE FROM Evento WHERE id=?");
        $sql_p_return-> execute([$id]);
        
        if($sql_p_return) echo "Evento Elimnado con Exito";
        else echo "Problema de Regsitro,Por favor intentelo de nuevo";
    
    }
}
    
    eliminar_fila($conn);

    $conn=NULL;
?>