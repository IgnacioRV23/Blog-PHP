<?php
include_once './includes/cabecera.php';
include_once './includes/redireccionar.php';
?>

<html>
    <head>
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container-fluid row my-4 m-auto justify-content-around">
            <div class="col-8 card p-4 shadow cotainer-categorias">

                <form action="guardar-categoria.php" method="POST" class="w-75 m-auto">
                    <h1 class="mb-4">Crear categorías</h1>

                    <div class="mb-4">
                        <label  class="form-label">Nombre de categoría</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Categoría" required>
                    </div>

                    <div class="d-grid gap-2 my-4">
                        <input type="submit" value="Guardar" class="btn btn-outline-primary"/>
                    </div>
                </form>
            </div>

            <?php
            include_once './includes/lateral.php';
            ?>
        </div>


        <?php
        require_once './includes/footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="app.js"></script>

        <?php
//Esta llamada de script js debe de estar debajo de la etiqueta donde se declara el app.js para que funcione de manera correcta.
        if (isset($_SESSION['swal'])) {

            //Declaracion de varible de resultado de registro de usuario.
            $icono = $_SESSION['icono'];

            $titulo = $_SESSION['titulo'];

            $mensaje = $_SESSION['mensaje'];

            //Se concatena el mensaje obtenido de la variable y se encierra entre comilla simple para enviar el parametro de manera correcta al js.
            echo "<script>MoostrarSwal('$icono', '$titulo', '$mensaje')</script>";
        }

        if (isset($_SESSION['errores'])) {
            $errores = $_SESSION['errores'];

            echo "<script>console.log(" . json_encode($errores) . ")</script>";
        }

//Se destruye especificamente las variables de sesion del swal para que se pueda reutilizar el mensaje de alerta.
        unset($_SESSION['swal']);
        unset($_SESSION['icono']);
        unset($_SESSION['titulo']);
        unset($_SESSION['mensaje']);
        unset($_SESSION['errores']);
        ?>
    </body>
</html>