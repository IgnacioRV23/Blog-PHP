<div class="col-3">
    <aside>
        <!-- Formulario de ingreso -->
        <div class="card shadow p-3 mb-4">
            <h3 class="text-center">Identificate</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="nombre@ejemplo.com">
                </div>

                <div>
                    <label class="form-label">Password</label>
                    <input name="password" placeholder="password" type="password" class="form-control">
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
    </aside>
</div>