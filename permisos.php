<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select p.id, u.usuario, r.descripcion
from permisos p, usuarios u, roles r
where u.id = p.id_user and r.id = p.id_rol
order by p.id;";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

?>
<div class="container">
    <div class="row">
        <div class="col-lg-10 py-4 mx-auto">
            
            <h1 class="text-center">Permisos</h1>
            <p>
                <a href="permiso-insertar.php" class="btn btn-success"> Insertar Nuevo Permiso</a>
            </p>
            <table class="table table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Descripcion deRol</th>        
                    <th colspan="2">Acciones</th>            
                </tr>
                <?php foreach ($roles as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['usuario'] ?></td>
                        <td><?= $item['descripcion'] ?></td>
                        
                     
                        
                        <td>
                            <a href="permiso-modifica.php?id=<?= $item['id'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="permiso-elimina.php?id=<?= $item['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>


<?php
include_once('librerias/pie.php');
?>