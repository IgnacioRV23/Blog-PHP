<?php

//Codigo para manejo de registro del usuario.
//Se valida si el post obtiene el input de tipo submit.
if (isset($_POST)) {
    //Si existe post se realiza el requiere de la conexion sql.
    require_once './includes/conexion.php';

    //Se valida que el metodo post obtenga informacion en todos los campos.
    //Se realiza una condicion ternaria, si el campo si esta seteado, entonces se obtiene la informacion, 
    //si el metodo post no esta seateado, entonces se coloca la variable en false.
    $nombre = isset($_POST['nombre']) ? mysqli_escape_string($db, $_POST['nombre']) : false;

    $apellidos = isset($_POST['apellidos']) ? mysqli_escape_string($db, $_POST['apellidos']) : false;

    $email = isset($_POST['email']) ? mysqli_escape_string($db, $_POST['email']) : false;

    $password = isset($_POST['password']) ? mysqli_escape_string($db, $_POST['password']) : false;

    //Se valida que todos los campos cumplan con la informacion y ninguno este en false.
    if ($nombre && $apellidos && $email && $password) {
        //Se realiza una validacion para saber si existe un usuario existente con el mismo correo.
        $sql = "SELECT email FROM usuarios where email = '$email'";

        $validaCorreo = mysqli_query($db, $sql);

        //Se valida que la consulta se ejecuta de manera correcta.
        if ($validaCorreo) {
            //Si la consulta se realiza de manera correcta, se procede a contar cuantas filas se obtienen.
            $numFilas = mysqli_num_rows($validaCorreo);

            //Si el numero de filas igual a cero, quiere decir que no existe ningun correo en la base de datos, entonces se puede registrar el usuario.
            //Si el numero de filas es mayor a cero, ya existe un usuario con ese mismo correo.
            if ($numFilas == 0) {
                //Se inicia con el proceso de registro de usuario en la base de datos.
                //Se realiza un cifrado por 4 de la contraseña para que se guarde de manera segura en la BD.
                $passwordCifrado = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

                //Se crea el sql que realiza el insert a la tabla de usuarios.
                //Se pasan las variables de php entre comillas para que el sql pueda interpretar la informacion como strings de manera correcta.
                $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$passwordCifrado', CURDATE());";

                $guardar = mysqli_query($db, $sql);

                //Se valida que el query se haya ejecutado de manera correcta.
                if ($guardar) {
                    //Se setea la variable de sesion.
                    $_SESSION['swal'] = true;

                    $_SESSION['icono'] = 'success';

                    $_SESSION['titulo'] = 'Registro usuario';

                    $_SESSION['mensaje'] = '¡Usuario registrado de forma exitosa!';
                } else {
                    //Se setea la variable de sesion.
                    $_SESSION['swal'] = true;

                    $_SESSION['icono'] = 'error';

                    $_SESSION['titulo'] = 'Registro usuario';

                    $_SESSION['mensaje'] = 'Error registrando el usuario.';

                    echo "<script>console.log('" . mysqli_error($db) . "')</script>";

                    //Se setean los errores en un array.
                    if (isset($_SESSION['errores'])) {
                        $error = 'registro.php:Error: ' . mysqli_error($db);
                        array_push($_SESSION['errores'], $error);
                    } else {
                        $error = 'registro.php:Error: ' . mysqli_error($db);
                        $_SESSION['errores'] = [$error];
                    }
                }
            } else {
                //Se crea un mensaje de notificacion al usuario para indicar que ya existe un usuario con el mismo correo.
                //Se setea la variable de sesion.
                $_SESSION['swal'] = true;

                $_SESSION['icono'] = 'error';

                $_SESSION['titulo'] = 'Registro usuario';

                $_SESSION['mensaje'] = 'Ya existe un usuario registrado con el correo ingresado.';
            }
        }
    }
}

//Al finalizar el script se realiza una redireccion al index de la aplicacion.
header('Location: index.php');
