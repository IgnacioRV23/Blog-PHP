<?php

//Iniciar sesion y conexion a la bd
require_once './includes/conexion.php';

//recoger datos del formulario
if (isset($_POST)) {
    $email = mysqli_escape_string($db, trim($_POST['email']));

    $password = mysqli_escape_string($db, $_POST['password']);

    //Se valida si existe un registro en la BD con el email especificado.
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";

    $login = mysqli_query($db, $sql);

    //Se valida que el query se ejecuta de manera correcta y tambien que exista un usuario con el correo especificado.
    if ($login && mysqli_num_rows($login) == 1) {
        //Se crea un array sociativo con el resultado de la consulta.
        $usuario = mysqli_fetch_assoc($login);

        //Se realiza la verificacion de la contrasenia de la DB contra la digitada por el usuario.
        //password_verify, retorna true si las contrasenias coinciden o false si son distintas.
        $verifica = password_verify($password, $usuario['password']);

        if ($verifica) {
            //Se crea una variable de sesion, en donde se guarda la informacion del usuario.
            $_SESSION['usuario'] = $usuario;

            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'success';

            $_SESSION['titulo'] = 'Inicio de sesión';

            $_SESSION['mensaje'] = 'Sesión iniciada de manera correcta.';
        } else {
            //Se envia mensaje de error, que la contrasenia no coincide con la BD.
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'error';

            $_SESSION['titulo'] = 'Inicio de sesión';

            $_SESSION['mensaje'] = 'Contraseña incorrecta.';
        }
    } else {
        if (mysqli_num_rows($login) == 0) {
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'error';

            $_SESSION['titulo'] = 'Inicio de sesión';

            $_SESSION['mensaje'] = 'El correo no está registrado en el sistema.';
        } else {
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'error';

            $_SESSION['titulo'] = 'Inicio de sesión';

            $_SESSION['mensaje'] = 'Ocurrio un error al intentar iniciar su sesión.';
        }
    }
}

//redirigir al index
header('Location: index.php');
