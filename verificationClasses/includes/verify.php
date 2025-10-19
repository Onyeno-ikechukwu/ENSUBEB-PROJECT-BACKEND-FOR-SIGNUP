<?php



if ($_REQUEST['REQUEST_METHOD'] = "POST") {

  session_start();

  $code = $_POST['code'];
  $session = $_SESSION["code"];

  if (isset($session)) {
      if ($session == $code) {
        header("location: ../../body/data/data.php");
      } else if (empty($code)){
        $_SESSION["wrongcode"] = "put your verification code";
        header("location: ../../body/verification/verification.php");
      } else {
        $_SESSION["wrongcode"] = "incorrect code";
        header("location: ../../body/verification/verification.php");
      }
    
  }
}