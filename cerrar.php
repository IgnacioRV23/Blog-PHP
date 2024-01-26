<?php
//Se inicia la sesion para poder validar si existe la variable de sesion de usuario en el sistema.
session_start();

//Si existe la sesion de usuario se procede a destruirla, para cerrar la sesion.
if (isset($_SESSION['usuario']))
{
    session_destroy();
}

//Se redirige a la pagina principal.
header('Location: index.php');
?>
