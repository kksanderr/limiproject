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

  // if($db->delete('korisnici', 6)) {
  //   echo "uspelo!";
  // }
  // else {
  //   echo "nije uspelo";
  // }

  // $korisnici = $db->find('korisnici', ['ime', 'Bojana'])->results();

  // $update = $db->update('korisnici', 16, ['ime'=>'Milan', 'prezime'=>'Kater']);

  // $fields = [
  //   'ime'=>'Milan',
  //   'prezime'=>'Kater'
  // ];
  //
  // if($db->update('korisnici', 16, $fields)) {
  //   echo "uspelo";
  // }
  // else {
  //   echo "Nije uspelo";
  // }

  $fields = [null, 'Stefan', 'Palic', 'Ulica 22', 1212990569890];

  if($db->insert('korisnici', $fields)) {
    echo "Uspelo";
  }
  else {
    echo "Nije uspelo";
  }

  // echo "<pre>";
  // print_r($db);
  // // print_r($korisnici);
  // echo "</pre>";
 ?>
