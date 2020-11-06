<?php
include_once('librerias/cab.php');
?>



<div class="container">
  <div class="row">
    <div class="col-lg-5 py-4 mx-auto">
      <h1 class="text-center">Nuevo Rol</h1>
      <form action="roles-insertar-procesa.php" method="post">
        <div class="form-group">
          <label for="">Descripcion</label>
          <input type="text" name="descripcion" class="form-control" required>
        </div>

        <div align="center">
          <button type="submit" class="btn btn-success">Enviar</button>
          <a class="btn btn-primary" href="roles.php">Volver</a>
        </div>
      </form>
    </div>
  </div>
</div>






<?php
include_once('librerias/pie.php');
?>