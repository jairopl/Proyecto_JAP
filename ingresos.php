<?php 
include_once "include/include.php";
isConnected(false);

?>
<!DOCTYPE html>
<html lang="es">
  <?php print_header(); ?>
<body>
<?php print_nav_bar(); ?>
<div class="content-wrapper">
  <?php print_page_title('Ingresos a salas') ?>
  <div class="panel panel-default">
    <div class="panel-body">
    <form action="guardar_ingreso.php" method="post" class="form">
      <div class="form-group">
        <label for="cc">Cédula</label>
        <input class="form-control" type="text" name="cc" id="cc" placeholder="Escriba la cédula del asistente" required>
      </div>
      <div class="form-group">
        <button class="btn btn-primary">Buscar</button>
      </div>
    </form>
    </div>  
  </div>
</div>
</body>
</html>