<?php 
include_once "include/include.php";
include_once "include/database.php";
isConnected(false);

?>
<!DOCTYPE html>
<html lang="es">
  <?php print_header(); ?>
<body>
<?php print_nav_bar(); ?>
<div class="content-wrapper">
  <?php print_page_title('Inscripción asistente') ?>
  <div class="panel panel-default">
    <div class="panel-body">
    <form action="guardar_inscripcion.php" method="post" class="form">
      <div class="form-group">
        <label for="cc">Cédula</label>
        <input class="form-control" type="text" name="cc" id="cc" required>
      </div>
      <div class="form-group">
        <label for="nombres">Nombres</label>
        <input class="form-control" type="text" name="nombres" id="nombres" required>
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input class="form-control" type="text" name="apellidos" id="apellidos" required>
      </div>
      <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input class="form-control" type="text" name="ciudad" id="ciudad">
      </div>
      <div class="form-group">
        <label for="departamento">Departamento</label>
        <input class="form-control" type="text" name="departamento" id="departamento">
      </div>
      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion">
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input class="form-control" type="text" name="telefono" id="telefono">
      </div>
      <div class="form-group">
        <label for="sexo">Sexo</label><br>
        <input type="radio" name="sexo" value="1" checked>Mujer<br>
        <input type="radio" name="sexo" value="0">Hombre
      </div>
      <div class="form-group">
        <label for="id_sala">Inscribir en la sala:</label><br>
  <?php
  $conexion;
  $sql = "SELECT * FROM sala";
  $resultado = mysql_query($sql, $conexion);

  $output = '';
  while ($fila = mysql_fetch_row($resultado)) {
    $output .= "<option name='id_sala' value='$fila[0]'>$fila[1]</option>";
  }
  if ($resultado) {
    $output = "<select id='id_sala' class='form-control' name='id_sala'>" . $output . '</select>';
  }
  echo $output;
  ?>
      </div>
      <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
        <input type="reset" value="Cancelar" class="btn btn-danger">
      </div>
    </form>
    </div>  
  </div>
</div>
</body>
</html>