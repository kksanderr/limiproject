<?php

  //pokretanje sesije
  session_start();

  //autoloader
  spl_autoload_register(function($class) {
    requuire_once 'classes/'.$class.'.php';
  });
 ?>
