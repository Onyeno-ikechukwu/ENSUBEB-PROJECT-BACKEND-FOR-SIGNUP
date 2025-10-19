<?php




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader (created by composer, not included with PHPMailer)
  require 'vendor/autoload.php';


  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  
  require 'vendor/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/src/SMTP.php';

  


if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];

  require_once "../module/dbh.php";
  require_once "../control/signUp.php";

 

  $signUp = new signup($id, $name, $email, $number);
  $signUp -> verify();
  
  
  
  
}