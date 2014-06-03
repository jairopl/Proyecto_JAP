<?php 
$host    = "localhost";
$bd      = "conferencias_unad";
$usuario = "root";
$pass    = "root";

$conexion = mysql_connect($host, $usuario, $pass) or die("No se pudo conectar a la base de datos " . mysql_error());
mysql_select_db($bd, $conexion) or die("No se pudo seleccionar la base de datos" . msql_error());
mysql_query("SET NAMES UTF8");
?>