<?php

//Codigo para manejo de registro del usuario.
//Se valida si el post obtiene el input de tipo submit.
if (isset($_POST)) {
    //Si existe post se realiza el requiere de la conexion sql.
    require_once './includes/conexion.php';

    //Se valida que el metodo post obtenga informacion en todos los campos.
    //Se realiza una condicion ternaria, si el campo si esta seteado, entonces se obtiene la informacion, 
    //si el metodo post no esta seateado, entonces se coloca la variable en false.
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;

    $email = isset($_POST['email']) ? $_POST['email'] : false;

    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Se valida que todos los campos cumplan con la informacion y ninguno este en false.
    if ($nombre && $apellidos && $email && $password) {
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
            $_SESSION['resultadoRegistro'] = true;
        } else {
            //Se setea la variable de sesion.
            $_SESSION['resultadoRegistro'] = false;
        }
    }
}

//Al finalizar el script se realiza una redireccion al index de la aplicacion.
header('Location: index.php');
