<?php
//Se importa la conexion a la base de datos en el cabecero de la pagina.
require_once 'conexion.php';
require_once 'helper.php';

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
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                    </li>



                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#">Sobre mi</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#">Contacto</a>
                    </li>
                </ul>

                <?php if (isset($_SESSION['usuario'])) : ?>
                    <div class="alert alert-primary p-1 m-0 me-4" role="alert">
                        <b class=" fs-6">
                            Saludos <?php echo $nombre . ' ' . $apellidos . '.' ?>
                        </b>
                    </div>
                <?php endif; ?>

                <!--Creacion de vista de categorias por medio de bucle while-->
                <?php $categorias = ConseguirCategorias($db) ?>
                <?php
                //Se valida que el array de categorias no este vacio.
                if (!empty($categorias)) :
                    ?>
                    <div class="dropdown me-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </button>
                        <ul class="dropdown-menu">
                            <?php while ($categoria = mysqli_fetch_assoc($categorias)): ?>   
                                <li class="nav-item m-2">
                                    <a class="nav-link" aria-current="page" href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
