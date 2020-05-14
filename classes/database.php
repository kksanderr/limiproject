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
    // $params = ['ivan', 'nikolic', 'adresa']
    public function query($sql, $params = []) {
      $this->error = false;
      $this->query = $this->pdo->prepare($sql);

      if($this->query) {
        // bindovanje parametara
        if(count($params)) {
          $i=1;
          foreach($params as $param) {
            $this->query->bindValue($i, $param);
            $i++;
          }
        } //end if(count($params))
        if($this->query->execute()) {
          $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
          $this->count = $this->query->rowcount();
        }
        else {
          $this->error = true;
        }
      } // end if($this->query)
      return $this;
    } // end query

    public function results() {
      return $this->results;
    }

    public function first() {
      if(!empty($this->results)) {
        return $this->results()[0];
      }
      return null;
    }

    public function count() {
      return $this->count;
    }

    //CRUD - create, read, update, delete

    // find
    // $where = ['ime', 'bojana'];
    public function find($table, $where=[]) {
      if(count($where)===2) {
        $field = $where[0];
        $value = $where[1];

        $sql = "SELECT * FROM {$table} WHERE {$field} = ?";
        $this->query($sql, [$value]);
        if(!$this->error) {
          return $this;
        }
      }
      return null;
    }

    // delete
    public function delete($table, $id) {
      $sql = "DELETE FROM {$table} WHERE id = ?";
      $this->query($sql, [$id]);
      if(!$this->error) {
        return true;
      }
      return false;
    }

  }

 ?>
