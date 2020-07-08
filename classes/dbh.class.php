<?php
  /** Database handler */
 
  class Dbh {

    protected PDO $conn;
    private $host = "localhost";
    private $user = "phpmyadminuser";
    private $pwd = "Password123#@!";
    private $dbName = "tasks_db";
    private $port = 3306;
    private $charset = "utf8mb4";

    protected function connect(): PDO{
      $dsn = "mysql:host=" . $this->host . ";"
      . "dbname=". $this->dbName . ";"
      . "port=". $this->port . ";"
      . "charset=". $this->charset . ";";

      try {
        $this->conn = new PDO(
          $dsn,
          $this->user,
          $this->pwd
        );
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this->conn;
      } catch (PDOException $e) {
        echo "<br> Database Connection failed <br> {$e->getMessage()}";
      }
    }

    function disconnect(){
      if(isset($this->conn)){
        unset($this->conn);
      }
    }
  }
