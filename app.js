function MoostrarSwal(icono, titulo, mensaje) {
    Swal.fire({
        title: titulo,
        text: mensaje,
        icon: icono,
        confirmButtonText: "Aceptar",

        //Elimina los estilos por defecto del boton.
        buttonsStyling: false,

        //Se especifica que se agregaran nuevas clases custon al boton de confirmar y se agregan las clases de bootstrap.
        customClass: {
            confirmButton: 'btn btn-outline-primary'
        }
    });
}