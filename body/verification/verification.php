<?php
session_start();

var_dump($_SESSION["code"]);

if (isset($_SESSION["code"])) {
  var_dump($_SESSION["code"]);
  var_dump($_SESSION["email"]);
}else{
  echo "not set";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    .code{
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <form action="../../verificationClasses/includes/verify.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email Verification Code :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="code"> <?php if (isset($_SESSION["wrongcode"])) {
        echo '<p class="code">'.$_SESSION["wrongcode"].'</p>';
      }  ?>
    </div>
    
    <button type="submit" class="btn btn-success w-100" >Submit</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>