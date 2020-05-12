<?php
  require_once('core/start.php');

  // echo Config::DB_USER;
  // echo Config::DB_SOURCE;

  $db = Database::connect();

  // $sql = "SELECT * FROM korisnici WHERE ime = ? AND korisnik_id = ?";
  //
  // $korisnici = $db->query($sql, ['Bojana', 15])->first();
  //
  // echo "<pre>";
  // //print_r($db);
  // print_r($korisnici);
  // echo "</pre>";
  //
  // echo $korisnici->adresa;
 ?>
