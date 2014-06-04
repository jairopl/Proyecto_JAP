<?php
if (!function_exists("_get")) {
  function _get($var = null)
  {
    global $JP;

    if ($var === "db") {
      include "www/config/database.php";
      return isset($JP["db"]) ? $JP["db"] : false;
    }

    return isset($JP[$var]) ? $JP[$var] : false;
  }
}

if (!function_exists("set")) {
  function set($var = null, $value = null)
  {
    global $JP;

    if (is_null($var) or is_null($value)) {
      return false;
    }

    $JP[$var] = $value;
  }
}