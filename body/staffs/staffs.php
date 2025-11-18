<?php
  session_start();
  if (isset($_SESSION['id'])) {
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STAFF ACCOUNT</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   
  <ul class="nav">
    <li class="nav1">
      <img src="..assets/logo-YGPAtP36.png" alt="" class="nav1img">
      <div class="shift">
        <h2>ENSUBEB</h2>
        <P>Ensuring Education Reaches All Children</P>
      </div>
    </li>
    <li class="nav2">
      <a href="#" class="nav2i">Home</a>
      <a href="#certificates" class="nav2ii">Certificates</a>
      <a href="../media/news-logphp" class="nav2ii">News</a>
      <div class="nav2ii">
        <?php  
          if (isset($_SESSION['id'])) {
          require_once "../../classes/modules/dbh.php";
          $dbh = new Dbh;
          $query = "SELECT staffpic FROM users WHERE id = ?;";
          $stmt = $dbh -> connect() -> prepare($query);
          $stmt->execute([$_SESSION['id']]);
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          foreach ($result as $results) {
          echo '<img src=" ../../classes/images/'.$results.'" alt="" class="nav2iiimg nav2iii">';
          }
          }
        ?>
      </div>
    </li>
  </ul>
  <ul class="nav3">
    <li><a href="profile.php" class="nav3i">View Profile Picture</a></li>
    <li><a href="" class="nav3i">Change Password</a></li>
    <li><a href="../../session/session.php" class="nav3i">SignOut</a></li>
  </ul>
  
  </ul>
  <div class="first">
    <h1 class="first1">ENUGU STATE UNNIVERSAL BASIC EDUCATION</h1>
    <P class="first2">Ensuring education reaches all children</P>
    <button class="first3"><a href="../biography/about-ensubeb-login.php" class="first3i">Learn More</a></button>
  </div>

  <?php  
    if (isset($_SESSION['role'])) {
      echo $_SESSION['role'];
    }
    
  ?>

  <h1 class="second" id="certificates">DOCUMENTS</h1>
    <div class="fourth">
      <div class="fourth1">
        <?php
          if (isset($_SESSION['id'])) {
            require_once "../../classes/modules/dbh.php";
            $dbh = new Dbh;
            $query = "SELECT appletter FROM users WHERE id = ?;";
            $stmt = $dbh -> connect() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            foreach ($result as $results) {
              echo '<a href=" ../../classes/images/'.$results.'"><img src=" ../../classes/images/'.$results.'" alt="" class="fourth1i"></a>';
            }
          }
        ?>
        
        <h4 class="fourth1ii">APPOINTMENT LETTER</h4>
      </div>
      <div class="fourth2">
        <?php  
          if (isset($_SESSION['id'])) {
            require_once "../../classes/modules/dbh.php";
            $dbh = new Dbh;
            $query = "SELECT conletter FROM users WHERE id = ?;";
            $stmt = $dbh -> connect() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            foreach ($result as $results) {
              echo '<a href=" ../../classes/images/'.$results.'"><img src=" ../../classes/images/'.$results.'" alt="" class="fourth1i"></a>';
            }
          }
        ?>
        <h4 class="fourth1ii">CONFIRMATION LETTER</h4>
      </div>
      <div class="fourth3">
        <?php 
          if (isset($_SESSION['id'])) {
            require_once "../../classes/modules/dbh.php";
            $dbh = new Dbh;
            $query = "SELECT fsl FROM users WHERE id = ?;";
            $stmt = $dbh -> connect() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            foreach ($result as $results) {
              echo '<a href=" ../../classes/images/'.$results.'"><img src=" ../../classes/images/'.$results.'" alt="" class="fourth1i"></a>';
            }
          }
        ?>
        <h4 class="fourth1ii">FIRST SCHOOL LEAVING</h4>
      </div>
      <div class="fourth3">
        <?php  
          if (isset($_SESSION['id'])) {
            require_once "../../classes/modules/dbh.php";
            $dbh = new Dbh;
            $query = "SELECT birthcert FROM users WHERE id = ?;";
            $stmt = $dbh -> connect() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            foreach ($result as $results) {
              echo '<a href=" ../../classes/images/'.$results.'"><img src=" ../../classes/images/'.$results.'" alt="" class="fourth1i"></a>';
            }
          }
        ?>
        <h4 class="fourth1ii">CERTIFICATE OF BIRTH</h4>
      </div>
  </div>
  <div class="fourthi">
     <div class="fourth3">
        <?php  
          if (isset($_SESSION['id'])) {
            require_once "../../classes/modules/dbh.php";
            $dbh = new Dbh;
            $query = "SELECT lgacert FROM users WHERE id = ?;";
            $stmt = $dbh -> connect() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            foreach ($result as $results) {
              echo '<a href=" ../../classes/images/'.$results.'"><img src=" ../../classes/images/'.$results.'" alt="" class="fourth1i"></a>';
            }
          }
        ?>
        <h4 class="fourth1ii">LGA CERTIFICATE</h4>
      </div> 
  </div>

  <h1 class="second">NEWS</h1>
   <div class="fourth">
    <a href="" class="color">
      <div class="fourth22">
        <img src="../../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
        <h3 class="fourth1ii1">Smart School At Ikwere LGA</h3>
        <p class="wrap">The executive Governor of Enugu state Dr. Peter Ndubisi Mbah and the...</p>
      </div>
    </a>
    
    <a href="" class="color">
      <div class="fourth22">
        <img src="../../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
        <h3 class="fourth1ii1">Ministry Project</h3>
        <p class="wrap">Get your latest project update from the ministry project section ...</p>
      </div>
    </a>
    
    <a href="" class="color">
      <div class="fourth22">
        <img src="../../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
        <h3 class="fourth1ii1">Department Anouncement</h3>
        <p class="wrap">The department of Engineering are informing the whole office ...</p>
      </div>

      <a href="" class="color">
      <div class="fourth22">
        <img src="../../assets/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
        <h3 class="fourth1ii1">Department Anouncement</h3>
        <p class="wrap">The department of Engineering are informing the whole office ...</p>
      </div>
    </a>
  </div>
  <div class="center">
    <button class="see"><a href="/media/news-login.php" class="first3ii">SEE MORE NEWS</a></button>
  </div>
   <div class="fifth">
    <div class="fifth1">
      <h2>WORKING HOURS</h2>
      <div class="ps fifthi">
        <p class="drag">Monday - Friday</p>
        <p class="drag">8am - 4pm</p>
      </div>
    </div>
    <div class="fifth2">
      <h2 class="h2">CONTACTS</h2>
      <div class="fifthi">
        <p> <img src="../../assets/email-8-svgrepo-com.svg" alt="" class="fifthimg"> Ensubeb@enugustate.gov.ng</p>
        <p class="drag"> <img src="../../assets/location-pin-alt-svgrepo-com.svg" alt="" class="fifthimg"> Upper Presidential Road Independence Layout,Weac Bus Stop, Enugu</p>
        <p class="drag"> <img src="../../assets/phone-call-svgrepo-com.svg" alt="" class="fifthimg"> 08036703633</p>
      </div>
    </div>
    <div class="fifth3">
      <h2 class="h2">SOCIALS</h2>
      <div class="fifthii">
        <div><a href=""><img src="../../assets/facebook-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
        <div><a href=""><img src="../../assets/whatsapp-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
        <div class="down"><a href=""><img src="../../assets/instagram-167-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
        <div class="down"><a href=""><img src="../../assets/twitter-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
      </div>
    </div>  
  </div>
  <div class="last">
    <p class="last1">@  All Copy Rights Belongs To ENSUBEB</p>
  </div>
  <script type="module" src="staffs.js"></script>
</body>
</html>
<?php
  } else {
    header("location: ../../index.php");
  }

?>