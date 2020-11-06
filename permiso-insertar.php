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

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from usuarios";
$result =  $con->query($sql);
$user = array();
while ($fila =  $result->fetch_array()) {
  $user[] = $fila;
}
?>


<div class="container">
  <div class="row">
    <div class="col-lg-5 py-4 mx-auto">

      <h1 class="text-center">Nuevo Permiso</h1>
      <form action="permiso-insertar-procesa.php" method="post">


        <div class="form-group">
          <label for="">Usuario</label>

          <select name="id_user" class="form-control">

            <option value="">-- Seleccione --</option>

            <?php foreach ($user as $item) : ?>
              <option value="<?= $item['id'] ?>"><?= $item['usuario'] ?></option>
            <?php endforeach ?>

          </select>



        </div>


        <div class="form-group">

          <label for=""> Rol</label>
          <select name="id_rol" class="form-control">

            <option value="">-- Seleccione --</option>

            <?php foreach ($roles as $item) : ?>
              <option value="<?= $item['id'] ?>"><?= $item['descripcion'] ?></option>
            <?php endforeach ?>

          </select>
        </div>
        <div align="center">
          <button type="submit" class="btn btn-success">Guardar</button>
          <a class="btn btn-primary" href="permisos.php">Volver</a>
        </div>
      </form>
    </div>
  </div>
</div>






<?php
include_once('librerias/pie.php');
?>