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
  <?php print_page_title('Sistema de control acceso') ?>
  <div class="panel panel-default">
    <div class="panel-body">
    <form action="" class="form">
      <div class="form-group">
        <div class="col-sm-7 col-sm-offset-2">
          <input class="form-control input-lg" type="text" placeholder="Buscar por equipo">
          <p class="help-block">Escriba el equipo que quiere buscar</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-7 col-sm-offset-2">
          <input class="form-control input-lg" type="text" placeholder="Buscar por visitante">
          <p class="help-block">Escriba el visitante del equipo que quiere buscar</p>
        </div>
      </div>
      <div class="form-group col-sm-5 col-sm-offset-4">
        <button class="btn btn-default" disabled>Buscar</button>
      </div>
    </form>
    </div>  
  </div>
</div>
</body>
</html>