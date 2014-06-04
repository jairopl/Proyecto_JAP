<?php 
include_once "include/include.php";
include_once "include/alerts.php";
include_once "include/database.php";

$sql = "SELECT * FROM usuario WHERE user = '$_POST[user]' AND password = '$_POST[pass]'";
$resultado = mysql_query($sql, $conexion);

if (mysql_fetch_array($resultado)) {
  createLoginSessions(array(
    'Username' => 'jairo',
    'Name' => 'Jairo',
    'ID_Privilege' => 1,
    ), false);
  redirect('index.php');
} else {
  showAlert('El nombre de usuario o password no coinciden.', 'index.php');
}
?>