<?php

class Dbh{
  private $host = "mysql:host=DESKTOP-QR6GH12;dbname=ensubeb";
  private $dbusername = "root";
  private $dbpassword = "";

  public function connect(){
    try {
      $pdo = new PDO( $this -> host, $this -> dbusername, $this -> dbpassword);
      $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "connection failed: " . $e -> getMessage(); 
    }
  }
  
}