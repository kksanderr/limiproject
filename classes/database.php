<?php

  class Database {
    private static $connection = null;

    private $pdo,
            $query,
            $results,
            $error = false,
            $count = 0;

    private function __construct() {
      try {
        $this->pdo = new PDO(Config::DB_SOURCE, Config::DB_USER, Config::DB_PASS);
      }
      catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    public static function connect() {
      if(!isset(self::$connection)) {
        self::$connection = new Database();
      }
      return self::$connection;
    }
  }

 ?>
