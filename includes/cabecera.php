<?php
//Se importa la conexion a la base de datos en el cabecero de la pagina.
require_once 'conexion.php';

if (isset($_SESSION['usuario'])) {
    //Se obtiene la informacion del usuario para su sesion.
    $usuario = $_SESSION['usuario'];

    $nombre = $usuario['nombre'];

    $apellidos = $usuario['apellidos'];
}
?>

<header>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg bg-body-secondary p-3" >
        <div class="container-fluid" id="test">
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
                
                <?php if (isset($_SESSION['usuario'])) : ?>
                    <div class="alert alert-primary p-1 m-0 me-4" role="alert">
                        <b class=" fs-6">
                            Bienvenido <?php echo $nombre . ' ' . $apellidos . '.' ?>
                        </b>
                    </div>
                <?php endif; ?>
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscador..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>
