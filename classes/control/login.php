<?php


require_once '../modules/function.php';

class fetch extends Dbh{

  private $emailno;
  private $pwd;

  public function __construct($emailno, $pwd){
    $this -> emailno = $emailno;
    $this -> pwd = $pwd;
  }

    
  public $error = [];
  public function errors(){

    if (empty($this -> emailno)) {
      $this -> error['email'] = 'You can not leave Email or Number empty';
    }
    if (empty($this -> pwd)) {
      $this -> error['pwd'] = 'You can not leave password empty';
    }
    return $this -> error;
  }

  public function loginAll() {
    $query = "SELECT id, pwd1, role FROM users WHERE name = ? OR email = ? LIMIT 1";
    $stmt = parent:: connect()->prepare($query);
    $stmt->execute([$this->emailno, $this->emailno]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($this -> pwd, $user['pwd1'])) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['role'] = $user['role'];
    } else {
      
      return false;
    }
  }
  
  public function login(){
    if ($this -> errors()) {
      $_SESSION["error"] = $this -> error;
      header("location: ../../body/login/login.php");
      exit();
    } else if(!$this -> loginAll()){
      $_SESSION["error"]["pwd"] = "Incorrect Password";
      header("location: ../../body/login/login.php");
      exit();
    } else if($this -> loginAll()){
      $this -> loginAll();
      if ($_SESSION['role'] == "media") {
        header("location: ../../body/media/media.php");
      } else if ($_SESSION['role'] == "chairman"){
        header("location: ../../body/media/media.php");
      }
      exit();
    } 
  
  }
}
  
