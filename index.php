<html>
    <head>
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <!-- cabecera -->
        <header>
            <!-- menu -->
            <nav class="navbar navbar-expand-lg bg-body-secondary p-3" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Blog</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Categoria 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Sobre mi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Contacto</a>
                            </li>
                        </ul>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscador..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

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

            <!-- barra lateral -->
            <div class="col-3">
                <aside>
                    <!-- Formulario de ingreso -->
                    <div class="card shadow p-3 mb-4">
                        <h3 class="text-center">Identificate</h3>
                        <form action="loging.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                            </div>

                            <div>
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input name="password" placeholder="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                            </div>

                            <div class="d-grid gap-2 my-3">
                                <input type="submit" value="Entrar" class="btn btn-outline-primary"/>
                            </div>
                        </form>
                    </div>

                    <!-- Formulario de registro -->
                    <div class="card shadow p-3">
                        <h3 class="text-center">Registro</h3>
                        <form action="loging.php" method="POST">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <input name="nombre" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Apellidos</label>
                                <input name="apellidos" type="text" class="form-control" id="formGroupExampleInput" placeholder="Apellidos">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                            </div>

                            <div>
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input name="password" placeholder="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                            </div>

                            <div class="d-grid gap-2 my-3">
                                <input type="submit" value="Registrarse" class="btn btn-outline-primary"/>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>

        <!-- pie de pagina -->
        <footer class="text-center">
            <p class="text-secondary">Desarrollado por Ignacio Rodríguez Varela &copy; 2024</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
