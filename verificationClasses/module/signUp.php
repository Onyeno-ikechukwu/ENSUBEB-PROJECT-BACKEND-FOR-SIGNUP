<?php

function checkId($id, $name, $number){

  $staffs = array(
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045'),
    array('id' => '123456789', 'name' => 'onyeno', 'number' => '08100655045')
  );

  foreach ($staffs as $staff) {
    if ($id !== $staff["id"]) {
      return true;
    } else if ($name !== $staff["name"])  {
      return true;
    } else if ($number !== $staff["number"])  {
      return true;
    } else {
      return false;
    }
  }

}

function nameCheck($name){
  if(strlen($name) < 6 || empty($name)){
    return true;
  } else {
    return false;
  }
}

function emailCheck($email){
  if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)){
    return true;
  } else {
    return false;
  }
}

function numberCheck($number){
  if (empty($number) || strlen($number) < 11) {
    return true;
  } else {
    return false;
  }
}

function mailVerification($email, $name){
  
  session_start();
  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
  $code = rand(1000, 9999);
  
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

      $mail->isSMTP();                                            //Send using SMTP
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
      $mail->Username   = 'onyenoikechukwu081006@gmail.com';                     //SMTP username
      $mail->Password   = 'pskimvvqusxynsqe';                               //SMTP password


      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
      $mail->Port       = 465;                           
      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('onyenoikechukwu081006@gmail.com', 'ENSUBEB');
      $mail->addAddress($email, $name);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'VERIFICATION CODE FROM ENSUBEB';
      $mail->Body    = "<h2>Verification Code</h2>
      <p>your verification code is ". $code ."</p>";

      session_start();
      $_SESSION["code"] = $code;
      $mail->send();


      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}