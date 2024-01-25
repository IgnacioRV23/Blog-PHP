function MoostrarSwal(resultado) {
    if (resultado)
    {
        Swal.fire({
            title: 'Registro usuario',
            text: '¡Usuario registrado de forma exitosa!',
            icon: 'success',
            confirmButtonText: "Aceptar",

            //Elimina los estilos por defecto del boton.
            buttonsStyling: false,

            //Se especifica que se agregaran nuevas clases custon al boton de confirmar y se agregan las clases de bootstrap.
            customClass: {
                confirmButton: 'btn btn-outline-primary'
            }
        });
    } else
    {
        Swal.fire({
            title: 'Registro usuario',
            text: 'Error registrando el usuario.',
            icon: 'error',
            confirmButtonText: "Aceptar",

            //Elimina los estilos por defecto del boton.
            buttonsStyling: false,

            //Se especifica que se agregaran nuevas clases custon al boton de confirmar y se agregan las clases de bootstrap.
            customClass: {
                confirmButton: 'btn btn-outline-primary'
            }
        });
    }
}