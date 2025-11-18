<?php

require_once "../classes/modules/function.php";

class media extends Dbh{
  private $img1;
  private $head;
  private $write;
  private $target_file1;
  private $target_file2;
  private $target_file3;
  private $check1;
  private $check2;
  private $check3;

  public function __construct($img1,$head,$write,$target_file1,$target_file2,$target_file3,$check1,$check2,$check3){
    $this -> img1 = $img1;
    $this -> head = $head;
    $this -> write = $write;
    $this -> target_file1 = $target_file1;
    $this -> target_file2 = $target_file2;
    $this -> target_file3 = $target_file3;
    $this -> check1 = $check1;
    $this -> check2 = $check2;
    $this -> check3 = $check3;
  }
  private function moveToFile(){
    move_uploaded_file($this -> check1,$this -> target_file1);
    move_uploaded_file($this -> check2,$this -> target_file2);
    move_uploaded_file($this -> check3,$this -> target_file3);
  }
  
  private function signin(){

    $this-> moveToFile();
    
    $query = "INSERT INTO users (name,dp,office,appointment,salary) VALUES (?,?,?,?,?);";
    $stmt = parent:: connect() -> prepare($query);
    $stmt->execute([$this -> target_file1,$this -> target_file2,$this -> target_file3,$this -> head,$this -> write]);
    $pdo = null;
    $stmt = null;
  }

  public function addMedia(){
    if (mediaValidation($this -> img1,  $this -> head, $this -> write)) {
      session_start();
      $_SESSION["media"] = "You cant leave either of the column empty";
    } else {
      signin();
    }
    
  }
}