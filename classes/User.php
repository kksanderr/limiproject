<?php

class User {
  private $db,
          $data = [],
          $isLoggedIn = false;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function create($fields) {
    if(!$this->db->insert('users', $fields)) {
      throw new Exception ('There was a problem creating your account.');
    }
  }

  public function find($user = null) {
    if($user) {
      $field = (is_numeric($user)) ? 'id' : 'email';
      $data = $this->db->find('users', $field, $user);
      if($data->count()) {
        $this->data = $data->first();
        return $this;
      }
    }
    return null;
  }

  public function login($email, $password) {

  }

  public function logout() {

  }

  public function checkLogin() {

  }

  public function data() {
    return $this->data;
  }

  public function isLoggedIn() {
    return $this->isLoggedIn;
  }
}

 ?>
