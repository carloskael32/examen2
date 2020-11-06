<?php
include_once('librerias/cab.php');
?>



<div class="container">

    <div class="col-lg-5 py-4 mx-auto">
        <h1 class="text-center">Nuevo Usuario</h1>
        <form action="usuario-insertar-procesa.php" method="post">
            <div class="form-group">

                <label for="">Usuario</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" name="correo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" name="pass" class="form-control" required>
            </div>

            <div align="center">
                <button type="submit" class="btn btn-success">Guardar</button>

                <a class="btn btn-primary" href="usuarios.php">Volver</a>
            </div>
        </form>
    </div>
</div>





<?php
include_once('librerias/pie.php');
?>