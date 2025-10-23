function eliminar_fila(id) {
    if (confirm("Alerta: esta accion implica la eliminacion del Evento de la base de datos. ¿Desea Usted continuar?")){
        $.ajax({
            type: "POST",
            url: "eliminar-evento.php",
            data: { id: id },
            success: function(response) {
                alert(response);
                location.reload();
            }
        });
    }
}