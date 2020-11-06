<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from roles";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

?>

<div class="container">
    
        <div class="col-lg-10 py-4 mx-auto">
            
            <h1 class="text-center">Roles</h1>
            <p>
                <a href="roles-insertar.php" class="btn btn-success"> Insertar Nuevo Rol</a>
            </p>
            <table class="table table-striped text-center">
                <tr>
                    <th>Id</th>
                    <th>Descripcion</th>
                 
                    <th colspan="2">Acciones</th>
                    
                </tr>
                <?php foreach ($roles as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['descripcion'] ?></td>
                     
                        
                        <td>
                            <a href="roles-modifica.php?id=<?= $item['id'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="roles-elimina.php?id=<?= $item['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    
</div>


<?php
include_once('librerias/pie.php');
?>