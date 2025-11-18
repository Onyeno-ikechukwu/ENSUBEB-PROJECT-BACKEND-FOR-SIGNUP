<?php

if($_REQUEST["REQUEST_METHOD"] = "POST"){
  $img1 = $_FILES["img1"]["name"];
  $img1 = $_FILES["img2"]["name"];
  $img1 = $_FILES["img3"]["name"];
  $head =$_POST["head"];
  $write =$_POST["write"];


  $target_dir = "../images/";

  $target_file1 = $target_dir . basename($img1);
  $target_file2 = $target_dir . basename($img2);
  $target_file3 = $target_dir . basename($img3);
  $check1 = $_FILES["img1"]["tmp_name"];
  $check2 = $_FILES["img2"]["tmp_name"];
  $check3 = $_FILES["img3"]["tmp_name"];

  require_once "../modules/dbh.php";
  require_once "../control/media.php";
  $media = new media($img1,$head,$write,$target_file1,$target_file2,$target_file3,$check1,$check2,$check3);
  $media -> addMedia();

}