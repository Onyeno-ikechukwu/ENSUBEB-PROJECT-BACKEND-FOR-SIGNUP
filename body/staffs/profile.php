<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <?php  
  session_start();

  if (isset($_SESSION['id'])) { 
    foreach ($_SESSION["id"] as $key) {
      require_once "../classes/dbh.php";
      $dbh = new Dbh;
      $query = "SELECT staffpic FROM users WHERE id = ?;";
      $stmt = $dbh -> connect() -> prepare($query);
      $stmt->execute([$key]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      foreach ($result as $results) {
        echo '<img src=" ../classes/'.$results.'" alt="" class="nav2iiimg">';
      }
    }
  }
  ?>
</body>
</html>