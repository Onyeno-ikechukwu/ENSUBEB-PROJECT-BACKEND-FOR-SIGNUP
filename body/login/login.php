<?php
  session_start();

  if (isset($_SESSION["id"])) {
    header("location: ../staffs/staffs.php");
  } else {
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <ul class="shift">
    <li>
      <h2>ENSUBEB</h2>
      <P>Ensuring education reaches all children</P>
    </li>
    <li></li>
    <li class="li1">
      <p><a href="../../index.php">Home</a></p>
      <p><a href="../biography/chairman-biography.php">Leaderchip</a></p>
      <p><a href="../media/news.php">News</a></p>
    </li>
  </ul>
  <div class="first">
    
    <div class="third">
      <h2 class="third1">LOGIN</h2><br>
      <form action="../../classes/includes/loginDbh.php" method="post" class="third2">
        <label for="email/number" >Email Or Phone No :<?php if (isset($_SESSION["error"]["name"])) { echo "<div class='error'> ".$_SESSION["error"]["name"]."</div>"; }?></label><br>
        <input type="text" name="email" placeholder="Put Your Email Or Phone Number"><br><br>
        <label for="email" >Password :<?php if (isset($_SESSION["error"]["pwd"])) { echo "<div class='error'> ".$_SESSION["error"]["pwd"]."</div>"; }?></label><br>
        <input type="password" name="pwd" placeholder="Put Your Password"><br><br>
        <div class="form">
          <p>Dont have an account <br> <a href="../signIn/signIn.php" class="dot">Click here</a></p>
          <button class="button">VERIFY</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
  }
?>