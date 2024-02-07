<html>
    <head>
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <!-- Cabecera de la pagina -->
        <?php
        //Se realiza de la importacion de la cabecera.
        require_once './includes/cabecera.php';
        include_once './includes/redireccionar.php';
        ?>

        <div class="container-fluid row my-4 m-auto justify-content-around px-4">
            <!-- caja principal -->
            <div class="col-8 card p-4 shadow container-entradas">
                <h1 class="mb-4">Entradas</h1>

                <?php
                if (isset($_GET)) {
                    $id = $_GET['id'];
                }

                $entrada = ConseguirEntrada($db, $id);

                if (!empty($entrada)) :
                    while ($ent = mysqli_fetch_assoc($entrada)):
                        ?>
                        <article>
                            <h2 class="text-primary fs-2"><?= $ent['titulo'] ?></h2> 

                            <p class="text-secondary fs-6 my-1">
                                <?= $ent['categoria'] . ' | ' . $ent['fecha'] ?>
                            </p>

                            <p class="">
                                <!--Se crea un subtring para que solo muestre los primeros 150 caracteres de la descripcion.-->
                                <?= $ent['descripcion'] ?>
                            </p>
                        </article>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>

            <!-- Se importa la barra lateral de la pagina -->
            <?php
//Se realiza la imporacion de la barra lateral.
            require_once './includes/lateral.php';
            ?>
        </div>

        <!-- pie de pagina -->
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
