<?php

class Dbconn {

  //Properties
  private $host = "localhost";
  private $user = "root";
  private $pwd = "";
  private $dbName = "tablefortwo";

  //Methods
  protected function connect(){
    $dsn = 'mysql:host=' . $this->host . ';dname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
