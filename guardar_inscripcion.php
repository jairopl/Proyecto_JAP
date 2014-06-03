<?php 
include_once "include/alerts.php";
include_once "include/database.php";
if (!is_numeric($_POST['cc'])) {
  showAlert('La cedula debe ser un numero, sin puntos ni comas.', 'back');
}
if (!empty($_POST['telefono']) && !is_numeric($_POST['telefono'])) {
  showAlert('El telefono debe ser numerico.', 'back');
}

$sql = "INSERT INTO asistente VALUES ('$_POST[cc]', '$_POST[nombres]', '$_POST[apellidos]', '$_POST[ciudad]', '$_POST[departamento]', '$_POST[direccion]', '$_POST[telefono]', $_POST[sexo])";
$insertar = mysql_query($sql, $conexion);

$sql = "INSERT INTO inscripcion (cc, sala) VALUES ('$_POST[cc]', '$_POST[id_sala]')";
$insertar = mysql_query($sql, $conexion);

showAlert('Se ha guardado e inscrito el asistente correctamente.', 'inscripcion_asistente.php');

?>