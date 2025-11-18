<?php

class signup extends Dbh {
   private $name;
   private $dp;
   private $office;
   private $appointment;
   private $salary;
   private $dbirth;
   private $number;
   private $gender;
   public $marriage;
   public $confirm;
   private $nin;
   private $bvn;
   private $country;
   private $state;
   private $lga;
   private $address;
   private $acc;
   private $accname;
   private $bankname;
   private $appletter;
   private $conletter;
   private $fsl;
   private $lgacert;
   private $birthcert;
   private $pwd1;
   private $pwd2;
   private $staffpic;
   private $check1;
   private $check2;
   private $check3;
   private $check4;
   private $check5;
   private $check6;
   private $target_file1;
   private $target_file2;
   private $target_file3;
   private $target_file4;
   private $target_file5;
   private $target_file6;
   private $hashedPassword;
   private $email;
   private $role;


   

  public function __construct($name,$dp,$office,$appointment,$salary,$dbirth,$number,$gender,$marriage,$confirm,$nin,$bvn,$country,$state,$lga,$address,$acc,$accname,$bankname, $appletter,$conletter,$fsl,$lgacert,$birthcert,$pwd1,$pwd2, $staffpic, $check1, $check2, $check3, $check4, $check5, $check6, $target_file1, $target_file2, $target_file3, $target_file4, $target_file5, $target_file6, $hashedPassword,$email,$role){
    $this -> name = $name;
    $this -> dp = $dp;
    $this -> office = $office;
    $this -> appointment = $appointment;
    $this -> salary = $salary;
    $this -> dbirth = $dbirth;
    $this -> number = $number;
    $this -> gender = $gender;
    $this -> marriage = $marriage;
    $this -> confirm = $confirm;
    $this -> nin = $nin;
    $this -> bvn = $bvn;
    $this -> country = $country;
    $this -> state = $state;
    $this -> lga = $lga;
    $this -> address = $address;
    $this -> acc = $acc;
    $this -> accname = $accname;
    $this -> bankname = $bankname;
    $this -> appletter = $appletter;
    $this -> conletter = $conletter;
    $this -> fsl = $fsl;
    $this -> lgacert = $lgacert;
    $this -> birthcert = $birthcert;
    $this -> pwd1 = $pwd1;
    $this -> pwd2 = $pwd2;
    $this -> staffpic =$staffpic;
    $this -> check1 = $check1;
    $this -> check2 = $check2;
    $this -> check3 = $check3;
    $this -> check4 = $check4;
    $this -> check5 = $check5;
    $this -> check6 = $check6;
    $this -> target_file1 = $target_file1;
    $this -> target_file2 = $target_file2;
    $this -> target_file3 = $target_file3;
    $this -> target_file4 = $target_file4;
    $this -> target_file5 = $target_file5;
    $this -> target_file6 = $target_file6;
    $this -> hashedPassword = $hashedPassword;
    $this -> email = $email;
    $this -> role = $role;
  
  }

  private function moveToFile(){
    move_uploaded_file($this -> check1,$this -> target_file1);
    move_uploaded_file($this -> check2,$this -> target_file2);
    move_uploaded_file($this -> check3,$this -> target_file3);
    move_uploaded_file($this -> check4,$this -> target_file4);
    move_uploaded_file($this -> check5,$this -> target_file5);
    move_uploaded_file($this -> check6,$this -> target_file6);
  }
  
  private function signin(){

    $this-> moveToFile();
    
    $query = "INSERT INTO users (name,dp,office,appointment,salary,dbirth,number,gender,marriage,nin,bvn,country,state,lga,address,acc,accname,bankname,appletter,conletter,fsl,lgacert,birthcert,pwd1,staffpic,email,role) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = parent:: connect() -> prepare($query);
    $stmt->execute([$this -> name,$this -> dp,$this -> office,$this -> appointment,$this -> salary,$this -> dbirth,$this -> number,$this -> gender,$this -> marriage,$this -> nin,$this -> bvn,$this -> country,$this -> state,$this -> lga,$this -> address,$this -> acc,$this -> accname,$this -> bankname,$this -> target_file1,$this -> target_file2,$this -> target_file3,$this -> target_file4,$this -> target_file5,$this -> hashedPassword,$this -> target_file6,$this -> email, $this -> role]);
    $pdo = null;
    $stmt = null;
  }

  private function fetchId(){
    $query= "SELECT id, role FROM users WHERE name = ?; LIMIT 1";
    $stmt = parent:: connect() -> prepare($query);
    $stmt -> execute([$this -> name]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION['id'] = $result["id"];
    $_SESSION['role'] = $result["role"];
  }


  private function isInputEmpty(){
    if ( isset($this -> name) && isset($this -> dp) && isset($this -> office) && isset($this -> appointment) && isset($this -> salary) && isset($this -> dbirth) && isset($this -> number) && isset($this -> gender) && isset($this -> marriage) && isset($this -> nin) && isset($this -> bvn) && isset($this -> country) && isset($this -> state) && isset($this -> lga) && isset($this -> address) && isset($this -> acc) && isset($this -> accname) && isset($this -> bankname) && isset($this -> appletter) && isset($this -> conletter) && isset($this -> fsl) && isset($this -> lgacert) && isset($this -> birthcert) && isset($this -> pwd1) && isset($this -> pwd2) && isset($this -> staffpic)) {
      return false;
    } else {
      return true;
    }
  }

  private $error = [];
  

  public function formValidation() {
    if (empty($this -> name)) {
      $this -> error["name"]  = "You can not leave Full Name empty";
    }
    if (strlen($this -> name) < 5) {
      $this -> error['name'] = "fill in your full name";
    } 
    if (empty($this -> dp)){
      $this -> error['dp'] = "You can not leave department empty";
    }
    if (empty($this -> office)){
      $this -> error['office'] = "You can not leave Disgnation Appointed Office empty";
    }
    if (empty($this -> appointment)){
      $this -> error['appointment'] = "You can not leave Date Of Appointment empty";
    }
    if (empty($this -> salary)){
      $this -> error['salary'] = "You can not leave salary scale empty";
    }
    if (empty($this -> dbirth)){
      $this -> error['dbirth'] = "You can not leave dirth of birth empty";
    }
    if (empty($this -> number)){
      $this -> error['number'] = "You can not leave phone number empty";
    }
    if (strlen($this -> number) > 11 || !is_numeric($this -> number)){
      $this -> error['number'] = "Put a valid phone number";
    }
    if (empty($this -> gender)){
      $this -> error['gender'] = "You can not leave gender empty";
    }
    if (empty($this -> marriage)){
      $this -> error['marriage'] = "You can not leave Marital Status empty";
    }
    if (empty($this -> confirm)){
      $this -> error['confirm'] = "You can not leave this column empty";
    }
    if (empty($this -> nin)){
      $this -> error['nin'] = "You can not leave NIN empty";
    }
    if (isset($this -> nin) < 11 || isset($this -> nin) > 11 || !is_numeric($this -> nin)){
      $this -> error['nin'] = "Put a valid NIN";
    }
    if (empty($this -> bvn)){
      $this -> error['bvn'] = "You can not leave BVN empty";
    }
    if (isset($this -> bvn) < 11 || isset($this -> bvn) > 11 || !is_numeric($this -> bvn)){
      $this -> error['bvn'] = "Put a valid BVN";
    }
    if (empty($this -> country)){
      $this -> error['country'] = "You can not leave your nationality empty";
    }
    if (empty($this -> state)){
      $this -> error['state'] = "You can not leave state empty";
    }
    if (empty($this -> lga)){
      $this -> error['lga'] = "You can not leave LGA empty";
    }
    if (empty($this -> address)){
      $this -> error['address'] = "You can not leave address empty";
    }
    if (empty($this -> acc)){
      $this -> error['acc'] = "You can not leave Account Number empty";
    }
    if (strlen($this -> acc) < 10 || strlen($this -> acc) > 10 || !is_numeric($this -> acc)){
      $this -> error['acc'] = "Put a valid Account Number";
    }
    if (empty($this -> accname)){
      $this -> error['accname'] = "You can not leave Account Name empty";
    }
    if (empty($this -> bankname)){
      $this -> error['bankname'] = "You can not leave Bank Name empty";
    }
    if (empty($this -> appletter)){
      $this -> error['appletter'] = "You can not leave Aplicattion letter empty";
    }
    if (empty($this -> conletter)){
      $this -> error['conletter'] = "You can not leave Confirmation letter empty";
    }
    if (empty($this -> fsl)){
      $this -> error['fsl'] = "You can not leave First School Leaving empty";
    }
    if (empty($this -> lgacert)){
      $this -> error['lgacert'] = "You can not leave LGA Certificate empty";
    }
    if (empty($this -> birthcert)){
      $this -> error['birthcert'] = "You can not leave Birth Certificate empty";
    }
    if (empty($this -> pwd1)){
      $this -> error['pwd1'] = "You can not leave password empty";
    }
    if (strlen($this -> pwd1) <= 5 || !preg_match('/[A-Z]/', $this -> pwd1) ){
      $this -> error['pwd1'] = "Put a strong password";
    }
    if ($this -> pwd1 !==  $this -> pwd2){
      $this -> error['pwd2'] = "Password does not match";
    }
    if (empty($this -> staffpic)){
      $this -> error['staffpic'] = "You can not leave staff's picture empty";
    }
    return $this -> error;
  }

 


  public function signUpUser(){
    // if ($this -> isInputEmpty()) {
    //   header("location: ../data/data.php");
    //   echo "input empty";
    //   die(); } else
    // } else
     if ($this -> formValidation()){
      session_start();
      $_SESSION["error2"] = $this -> error;
      header("location: ../../body/data/data.php");
      die();
    } else {
      $this -> fetchId();
      $this -> signin();

      $this -> fetchId();
      header("location: ../../body/staffs/staffs.php");
      die();

    }

    
  }

}


