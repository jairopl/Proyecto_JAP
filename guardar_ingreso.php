<?php 
include_once "include/include.php";
include_once "include/database.php";
isConnected(false);

if (!is_numeric($_POST['cc'])) {
  showAlert('La cedula debe ser un numero, sin puntos ni comas.', 'back');
}

$sql = "SELECT * FROM acceso WHERE cc = '$_POST[cc]' ORDER BY id DESC";
$resultado = mysql_query($sql, $conexion);
// Si ya tiene accesos anteriores
if ($fila = mysql_fetch_assoc($resultado)) {
  // si entro pero no salio
  if (empty($fila['hora_salida'])) {
    print "Ha ingresado a la sala";
  } else {
    print "Ha salido de la sala";
  }
} else {
  echo "No se ha registrado ingreso.";
}


?>
