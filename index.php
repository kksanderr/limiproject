<?php
  require_once('core/start.php');

  // echo Config::DB_USER;
  // echo Config::DB_SOURCE;

  $db = Database::connect();
  echo "<pre>";
  print_r($db);
  echo "</pre>";
 ?>
