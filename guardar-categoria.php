<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_escape_string($db, $_POST['nombre']) : false;

    if ($nombre) {
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";

        $guardar = mysqli_query($db, $sql);

        //Se valida que el query se haya ejecutado de manera correcta.
        if ($guardar) {
            //Se setea la variable de sesion.
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'success';

            $_SESSION['titulo'] = 'Registro categoría';

            $_SESSION['mensaje'] = '¡Categoría registrada de forma exitosa!';
        } else {
            //Se setea la variable de sesion.
            $_SESSION['swal'] = true;

            $_SESSION['icono'] = 'error';

            $_SESSION['titulo'] = 'Registro categoría';

            $_SESSION['mensaje'] = 'Error registrando la categoría.';

            echo "<script>console.log('" . mysqli_error($db) . "')</script>";

            //Se setean los errores en un array.
            if (isset($_SESSION['errores'])) {
                $error = 'guardar-categoria.php:Error: ' . mysqli_error($db);
                array_push($_SESSION['errores'], $error);
            } else {
                $error = 'guardar-categoria.php:Error: ' . mysqli_error($db);
                $_SESSION['errores'] = [$error];
            }
        }
    } else {
        //Se setea la variable de sesion.
        $_SESSION['swal'] = true;

        $_SESSION['icono'] = 'error';

        $_SESSION['titulo'] = 'Registro categoría';

        $_SESSION['mensaje'] = 'Error registrando la categoría.';

        echo "<script>console.log('" . mysqli_error($db) . "')</script>";
        
        //ocurrio un problema al guardar
        if (isset($_SESSION['errores'])) {
            $error = 'guardar-categoria.php:Error: ' . mysqli_error($db);
            array_push($_SESSION['errores'], $error);
        } else {
            $error = 'guardar-categoria.php:Error: ' . mysqli_error($db);
            $_SESSION['errores'] = [$error];
        }
    }
}

header('Location:crearCategoria.php');
