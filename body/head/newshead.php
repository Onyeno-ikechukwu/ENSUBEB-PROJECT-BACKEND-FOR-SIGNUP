<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    if (isset($_SESSION["id"])) {
    ?>
      <link rel="stylesheet" href="news-login.css">
    <?php
    } else {
    ?>
      <link rel="stylesheet" href="news.css">
    <?php
    }
  ?>
  
  <title>ABOUT ENSUBEB</title>
</head>
<body>
  <ul class="nav">
    <li class="nav1">
      <img src="../../assets/logo-YGPAtP36.png" alt="" class="nav1img">
      <div class="shift">
        <h2>ENSUBEB</h2>
        <P>Ensuring education reaches all children</P>
      </div>
    </li>
    <?php
    if (isset($_SESSION["id"])) {
      ?>
    <li class="nav2">
      <a href="" class="nav2ii"><img src="../../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg"></a>
      </li>
    </ul>

    <?php
    } else {
    ?>
      <li class="nav2">
        <a href="../login/login.php" class="nav2i">Login</a>
        <div class="big">/</div>
        <a href="../signIn/signIn.php" class="nav2ii">SignIn</a>
      </li>
    </ul>
    <?php
    }
    ?>