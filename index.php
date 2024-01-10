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
        ?>

        <div class="container-fluid row my-4 m-auto justify-content-around px-4">
            <!-- caja principal -->
            <div class="col-8 card p-4">
                <h1 class="mb-4">Entradas</h1>

                <article>
                    <h2 class="text-primary">Titulo de entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non porttitor nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </article>
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
    </body>
</html>
