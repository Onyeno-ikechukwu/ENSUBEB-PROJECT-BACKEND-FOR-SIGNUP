<?php
  session_start();
  // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN IN</title>
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
      <h2 class="third1">VERIFY ID</h2><br>
      <form action="../../verificationClasses/includes/signUp.php" method="post" class="third2">
        <label for="id">ID Number : <?php if (isset($_SESSION["error"]["id"])) { echo "<div class='error'> ".$_SESSION["error"]["id"]."</div>"; }?></label><br>
        <input type="text" placeholder=" Staff's ID Number" name="id"><br><br>
        <label for="name" > Surname : <?php if (isset($_SESSION["error"]["name"])) { echo "<div class='error'> ".$_SESSION["error"]["name"]."</div>"; }?></label><br>
        <input type="text" placeholder=" Staff's Full Name" name="name"><br><br>
        <label for="email" >Email : <?php if (isset($_SESSION["error"]["email"])) { echo "<div class='error'> ".$_SESSION["error"]["email"]."</div>"; }?></label><br>
        <input type="email" placeholder="@gmail.com" name="email"><br><br>
        <label for="number" >Number : <?php if (isset($_SESSION["error"]["number"])) { echo "<div class='error'> ".$_SESSION["error"]["number"]."</div>"; } ?></label><br>
        <input type="number" placeholder="+234" name="number"><br><br>
        <div class="form">
          <p>Already have an account <br> <a href="../login/login.php" class="dot">Click here</a></p>
          <button class="button">VERIFY</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>