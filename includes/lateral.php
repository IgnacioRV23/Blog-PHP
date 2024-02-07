<div class="col-3">
    <aside>
        <?php if (isset($_SESSION['usuario'])) : ?>
            <div class="card shadow p-3 mb-4">
                <h3 class="text-center my-3">Panel de control</h3>
                <!-- botones de panel de control -->
                <a href="crear-entradas.php" class="btn btn-outline-primary my-3">Crear entradas</a>
                <a href="crearCategoria.php" class="btn btn-outline-primary my-3">Crear categoría</a>
                <a href="cerrar.php" class="btn btn-outline-primary my-3">Cerrar sesión</a>
            </div>  
        <?php endif; ?>

        <?php if (!isset($_SESSION['usuario'])) : ?>
            <!-- Formulario de ingreso -->
            <div class="card shadow p-3 mb-4">
                <h3 class="text-center">Identificate</h3>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <div>
                        <label class="form-label">Password</label>
                        <input name="password" placeholder="password" type="password" class="form-control" required>
                    </div>

                    <div class="d-grid gap-2 my-3">
                        <input type="submit" value="Entrar" class="btn btn-outline-primary"/>
                    </div>
                </form>
            </div>

            <!-- Formulario de registro -->
            <div class="card shadow p-3">
                <h3 class="text-center">Registro</h3>
                <form action="registro.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellidos</label>
                        <input name="apellidos" type="text" class="form-control" placeholder="Apellidos" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <div>
                        <label class="form-label">Password</label>
                        <input name="password" placeholder="password" type="password" class="form-control" aria-describedby="passwordHelpBlock" required>
                    </div>

                    <div class="d-grid gap-2 my-3">
                        <input type="submit" value="Registrarse" name="submit" class="btn btn-outline-primary"/>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </aside>
</div>