<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Ingreso - Proyecto Programación de sitios Web - Jairo Prieto Londoño</title>
<link rel='stylesheet' type='text/css' href='css/normalize.css'>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/bootstrap-theme.min.css'>
<link rel='stylesheet' type='text/css' href='css/style.css'>
</head>
<body>
<div class='page-header'><h1>Ingreso</h1></div>
<div class="content-wrapper">
  <div class="panel panel-default">
    <div class="panel-body">
        <form action="process_login.php" method="POST" name="index"> 
            <div class="texto"><h2>ACCESO DE USUARIOS</h2></div>
            <div>
              <label>Usuario</label>
              <input type="text" name="user">
            </div>
            <div>
              <label>Contraseña</label>
              <input type="password" name="pass">
            </div>
            <div>
              <input name="boton" value="Entrar" type="submit" title="acceso de Usuarios">
            </div>
        </form>
    </div>  
  </div>
</div>
</body>
</html>