<?php
require_once('librerias/cab.php');
?>

<?php
require_once("librerias/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$query = $con->query($sql);
$row = $query->fetch_array();
?>



<div class="text-center">
    <div class="container ">


        <div class="col-lg-5 py-4 mx-auto">

            <div>
                <h1>Modificar Datos del Usuario</h1>





                <form class="text-left" name="modificar" action="usuario-modifica-procesa.php?id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group"> <label for="form16">Usuario</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>" required> </div>

                    <div class="form-group"> <label for="form17">Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>"> </div>

                    <div class="form-group"> <label for="form18">Nueva Contraseña</label>
                        <input type="password" class="form-control" name="pass" value="" required> </div>





                    <div align="center">
                        <button type="submit" class="btn btn-success">Guardar</button>

                        <a class="btn btn-primary" href="usuarios.php">Volver</a>

                    </div>

                    <div>&nbsp;</div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php

require_once('librerias/pie.php');
?>