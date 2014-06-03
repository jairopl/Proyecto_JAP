<?php
if (!function_exists("getAlert")) {
  function getAlert($message, $type = "error", $URL = null)
  {
    if (!is_null($URL)) {
      $message = a($message, encode($URL), true);
    }
    
    if ($type === "error") {
      return '<div id="alert-message" class="alert alert-error">'. __($message) .'</div>';
    } elseif ($type === "success") {
      unset($_POST);
      return '<div id="alert-message" class="alert alert-success">'. __($message) .'</div>';
    } elseif ($type === "warning") {
      return '<div id="alert-message" class="alert alert-warning">'. __($message) .'</div>';
    } elseif ($type === "notice") {
      return '<div id="alert-message" class="alert alert-info">'. __($message) .'</div>';
    }
  }
}

if (!function_exists("showAlert")) {
  function showAlert($message, $URL = false)
  {
    echo '<script>alert("'. $message .'");';
    
    if ($URL) {
      if ($URL == 'back') {
        echo 'history.go(-1);';
      } else {
        echo 'window.location.href="'. $URL .'";';      
      }
    }
    
    echo '</script>';
    exit();
  }
}