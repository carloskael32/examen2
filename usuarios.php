<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from usuarios";
$result =  $con->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
?>
<div class="container">
    
        <div class="col-lg-10 py-4 mx-auto">
            
            <h1 class="text-center">Usuarios</h1>
            <p>
                <a href="usuario-insertar.php" class="btn btn-success"> Insertar Nuevo Usuario</a>
            </p>
            <table class="table table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    <th colspan="2">Acciones</th>
                </tr>
                <?php foreach ($usuarios as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['usuario'] ?></td>
                        <td><?= $item['correo'] ?></td>
                        <td><?= $item['pass'] ?></td>

                        <td>
                            <a href="usuario-modifica.php?id=<?= $item['id'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="usuario-elimina.php?id=<?= $item['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    
</div>


<?php
include_once('librerias/pie.php');
?>