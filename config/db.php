<?php
class DataBase {
  private $host = '127.0.0.1';
  private $db   = 'portfolio';
  private $user = 'root';
  private $pass = '';

  private $pdo;

  private $stmt;

  public function __construct() {
    $dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8";
    $opt = [
    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES    => false,
  ];

    try {
      $this->pdo = new PDO($dsn, $this->user, $this->pass, $opt);
    } catch(Exception $ex) {
      die($ex->getMessage());
    }
  }

  public function prepare($query) {
    $this->stmt = $this->pdo->prepare($query);
  }

  public function execute() {
    return $this->stmt->execute();
  }

  public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

$database = new dataBase();
$database->prepare('SELECT * FROM users');
$database->execute();
$users = $database->resultset();

return $users;