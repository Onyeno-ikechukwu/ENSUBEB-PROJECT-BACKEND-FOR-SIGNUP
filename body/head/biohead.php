<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    if (isset($_SESSION["id"])) {
      ?>
      <link rel="stylesheet" href="biography-login.css">
    <?php
    } else {
    ?>
      <link rel="stylesheet" href="biography.css">
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
        <a href="../staffs/staffs.php" class="nav2i">Home</a>
        <a href="../media/news.php" class="nav2ii">News</a>
        <?php  
          if (isset($_SESSION['id'])) {
          require_once "../../classes/modules/dbh.php";
          $dbh = new Dbh;
          $query = "SELECT staffpic FROM users WHERE id = ?;";
          $stmt = $dbh -> connect() -> prepare($query);
          $stmt->execute([$_SESSION['id']]);
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          
            
          foreach ($result as $results) {
          echo '<div class="nav2ii nav2iii"><img src=" ../../classes/images/'.$results.'" alt="" class="nav2iiimg nav2iii"></div>';
          }
          }
        ?>
        
      </li>
      </ul>
      <ul class="nav3">
        <li><a href="../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" class="nav3i">View Profile Picture</a></li>
        <li><a href="" class="nav3i">Change Password</a></li>
        <li><a href="" class="nav3i">SignOut</a></li>
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