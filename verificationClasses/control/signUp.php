<?php


require_once "../module/signUp.php";



class signup extends Dbh{
  private $id;
  private $name;
  private $email;
  private $number;

  public function __construct($id, $name, $email, $number){
    $this -> id = $id;
    $this -> name = $name;
    $this -> email = $email;
    $this -> number = $number;
  }

   private function checkMail(){
    $query= "SELECT email FROM users WHERE email = ?; LIMIT 1";
    $stmt = parent:: connect() -> prepare($query);
    $stmt -> execute([$this -> email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result["email"] > 0) {
      return true;
    } else {
      return false;
    }
    
  }

  public $error = [];

  public function formValidation(){
    if (checkId($this -> id, $this -> name, $this -> number)) {
      $this -> error["id"] = 'Incorrect Verification Number';
    }
    if (nameCheck($this -> name)) {
      $this -> error["name"] = 'put a valid name';
    }
    if (emailCheck($this -> email)) {
      $this -> error["email"] = 'put a valid email';
    }
    if ($this -> checkMail()) {
      $this -> error["email"] = 'Email already existed';
    }
    if (numberCheck($this -> number)) {
      $this -> error["number"] = 'put a valid Phone number';
    }
    return $this->error;
  }

   public function verify(){
     if ($this->formValidation()){
      
      session_start();
      $_SESSION["error"] = $this->error;
      
      header("location: ../../body/signIn/signIn.php?");
      die();
    } else {
      mailVerification($this -> email, $this -> name);
      session_start();
      $_SESSION["email"] = $this->email;
      header("location: ../../body/verification/verification.php");
      die();
    }
  }

  // public function verify(){
  //   if (!$this -> formValidation()) {
  //     $queryString = http_build_query($this -> error);
  //     session_start();
  //     $_SESSION["error"] = $this -> error;
  //     header("location: ../../body/signIn/signIn.php?" . $queryString);
      
  //   } else {
      
  //     header("location: ../../body/verification/verification.php");
  //     die();
  //   }
    
  // }
  
}