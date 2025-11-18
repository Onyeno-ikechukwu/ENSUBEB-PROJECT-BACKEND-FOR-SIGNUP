<?php

if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $emailno =$_POST["email"];
  $pwd =$_POST["pwd"];

  require_once "../modules/dbh.php";
  require_once "../control/login.php";

  $fetch = new fetch($emailno, $pwd);
  session_start();
  $fetch -> login();
}