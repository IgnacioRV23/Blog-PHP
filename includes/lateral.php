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