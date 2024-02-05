<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';

    //Se obtiene la informacion del usuario para su sesion.    
    if (isset($_SESSION['usuario'])) {
        $id = $_SESSION['usuario']['id'];
    }

    $titulo = isset($_POST['titulo']) ? mysqli_escape_string($db, $_POST['titulo']) : false;

    $descripcion = isset($_POST['descripcion']) ? mysqli_escape_string($db, $_POST['descripcion']) : false;

    //Se realiza un parse de la categoria a int, debido a que asi se espera recibir en la BD.
    $categoria = isset($_POST['categoria']) ? mysqli_escape_string($db, (int) $_POST['categoria']) : false;

    if ($titulo && $descripcion && $categoria) {
        $sql = "INSERT INTO entradas VALUES (null, $id, $categoria ,'$titulo', '$descripcion', CURDATE());";
        
        $guardar = mysqli_query($db, $sql);
        
        //Se valida que el query se haya ejecutado de manera correcta.
        if ($guardar) {
            //Se setea la variable de sesion.
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'success';

            $_SESSION['titulo'] = 'Registro entradas';

            $_SESSION['mensaje'] = '¡Entrada registrada de forma exitosa!';
        } else {
            //Se setea la variable de sesion.
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'error';

            $_SESSION['titulo'] = 'Registro entrada';

            $_SESSION['mensaje'] = 'Error registrando la entrada.1111';

            echo "<script>console.log('" . mysqli_error($db) . "')</script>";

            //Se setean los errores en un array.
            if (isset($_SESSION['errores'])) {
                $error = 'guardar-entrada.php:Error: ' . mysqli_error($db);
                array_push($_SESSION['errores'], $error);
            } else {
                $error = 'guardar-entrada.php:Error: ' . mysqli_error($db);
                $_SESSION['errores'] = [$error];
            }
        }
    } else {
        //Se setea la variable de sesion.
        $_SESSION['swal'] = true;

        $_SESSION['icono'] = 'error';

        $_SESSION['titulo'] = 'Registro entrada';

        $_SESSION['mensaje'] = 'Error registrando la entrada.';

        echo "<script>console.log('" . mysqli_error($db) . "')</script>";

        //ocurrio un problema al guardar
        if (isset($_SESSION['errores'])) {
            $error = 'guardar-entrada.php:Error: ' . mysqli_error($db);
            array_push($_SESSION['errores'], $error);
        } else {
            $error = 'guardar-entrada.php:Error: ' . mysqli_error($db);
            $_SESSION['errores'] = [$error];
        }
    }
}

header('Location:crear-entradas.php');