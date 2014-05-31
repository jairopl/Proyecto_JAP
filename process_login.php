<?php 
include_once "include/include.php";

// TODO: verificar usuario

createLoginSessions(array(
  'Username' => 'jairo',
  'Name' => 'Jairo',
  'ID_Privilege' => 1,
  ), false);
redirect('index.php');
?>