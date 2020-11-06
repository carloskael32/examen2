<?php
require_once('librerias/cab.php');
?>

<?php
require_once("librerias/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM roles WHERE id = $id";
$query = $con->query($sql);
$row = $query->fetch_array();
?>



<div class=" text-center">
    <div class="container ">
        <div class="row">
            
            <div class="col-lg-5 py-4 mx-auto">
            
                <h1>Modificar Datos de Rol</h1>





                <form class="text-left" name="modificar" action="roles-modifica-procesa.php?id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group"> <label for="form16">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion']; ?>" required> </div>

                  





                    <div align="center">
                        <button type="submit" class="btn btn-success">Guardar</button>

                        <a class="btn btn-primary" href="roles.php">Volver</a>

                    </div>

          
                </form>

            </div>
        </div>
    </div>
</div>

<?php

require_once('librerias/pie.php');
?>



</body>

</html>