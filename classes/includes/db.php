<?php

if ($_REQUEST["REQUEST_METHOD"] = "POST"){
  session_start();

  $name = $_POST["name"];
  $dp = $_POST["department"];
  $office = $_POST["office"];
  $appointment = $_POST["appointment"];
  $salary = $_POST["salary"];
  $dbirth = $_POST["dbirth"];
  $number = $_POST["number"];
  $gender = trim($_POST["gender"] ?? '');
  $marriage = trim($_POST["marriage"] ?? '');
  $confirm = trim($_POST["confirm"] ?? '');
  $nin = $_POST["nin"];
  $bvn = $_POST["bvn"];
  $country = trim($_POST["country"] ?? '');
  $state = trim($_POST["state"] ?? '');
  $lga = trim($_POST["lga"] ?? '');
  $address = $_POST["address"];
  $acc = $_POST["acc"];
  $accname = $_POST["accname"];
  $bankname = $_POST["bankname"];
  $appletter = $_FILES["appletter"]["name"];
  $conletter = $_FILES["conletter"]["name"];
  $fsl = $_FILES["fsl"]["name"];
  $lgacert = $_FILES["lgacert"]["name"];
  $birthcert = $_FILES["birthcert"]["name"];
  $pwd1 = $_POST["pwd1"];
  $pwd2 = $_POST["pwd2"];
  $staffpic = $_FILES["staffpic"]["name"];
  $hashedPassword = password_hash($pwd2, PASSWORD_DEFAULT);
  $email = $_SESSION["email"];
  $role = "media";

  $target_dir = "../images/";

  $target_file1 = $target_dir . basename($appletter);
  $target_file2 = $target_dir . basename($conletter);
  $target_file3 = $target_dir . basename($fsl);
  $target_file4 = $target_dir . basename($lgacert);
  $target_file5 = $target_dir . basename($birthcert);
  $target_file6 = $target_dir . basename($staffpic);

  $check1 = $_FILES["appletter"]["tmp_name"];
  $check2 = $_FILES["conletter"]["tmp_name"];
  $check3 = $_FILES["fsl"]["tmp_name"];
  $check4 = $_FILES["lgacert"]["tmp_name"];
  $check5 = $_FILES["birthcert"]["tmp_name"];
  $check6 = $_FILES["staffpic"]["tmp_name"];

  require_once "../modules/dbh.php";
  require_once "../control/signup.php";


  $signup = new signup($name,$dp,$office,$appointment,$salary,$dbirth,$number,$gender,$marriage,$confirm,$nin,$bvn,$country,$state,$lga,$address,$acc,$accname,$bankname,$appletter,$conletter,$fsl,$lgacert,$birthcert,$pwd1,$pwd2,$staffpic, $check1, $check2, $check3, $check4, $check5, $check6, $target_file1, $target_file2, $target_file3, $target_file4, $target_file5, $target_file6, $hashedPassword,$email,$role);
  session_start();
  $signup -> signUpUser();

  
}
