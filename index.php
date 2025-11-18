<?php
  session_start();
  require_once "body/head/head.php";

  if (isset($_SESSION["id"])) {
    header("location: body/staffs/staffs.php");
  } else {
  ?>
      <div class="first">
      <h1 class="first1">ENUGU STATE UNNIVERSAL BASIC EDUCATION</h1>
      <P class="first2">Ensuring education reaches all children</P>
      <button class="first3"><a href="body/biography/about-ensubeb-login.php" class="first3i">Learn More</a></button>
      </div>
      <h1 class="second">LEADERSHIP</h1>
      <div class="third">
        <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="third1">
        <h3 class="third2">EXECUTIVE CHAIRMAN</h3>
        <h3 >Assoc. Prof. Okibe Banko Hygnius  PHD</h3>
        <p class="third3">Biography of Hygnius Banko</p>
        <button class="third4"><a href="body/biography/chairman-biography.php" class="first3ii">Read More</a></button>
      </div>
      <div class="fourth">
        <div class="fourth1">
          <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i">
          <h3 class="fourth1ii">HEAD OF SCHOOL SERVICE</h3>
          <h3 >Assoc. Prof. Okibe Banko Hygnius  PHD</h3>
          <p>Biography of Hygnius Banko</p>
          <button class="fourth1iii"><a href="body/biography/school-service-biography.php" class="first3ii">Read More</a></button>
        </div>
        <div class="fourth2">
          <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i">
          <h3 class="fourth1ii">HEAD OF ENGINEERING</h3>
          <h3 >Assoc. Prof. Okibe Banko Hygnius  PHD</h3>
          <p>Biography of Hygnius Banko</p>
          <button class="fourth1iii"><a href="body/biography/engineering-biography.php" class="first3ii">Read More</a></button>
        </div>
        <div class="fourth3">
          <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i">
          <h3 class="fourth1ii">HEAD OF DEPARTMENT</h3>
          <h3 >Assoc. Prof. Okibe Banko Hygnius  PHD</h3>
          <p>Biography of Hygnius Banko</p>
          <button class="fourth1iii"><a href="body/biography/department-biography.php" class="first3ii">Read More</a></button>
        </div>
      </div>
      <h1 class="second">NEWS</h1>
      <div class="fourth">
        <a href="" class="color">
          <div class="fourth22">
            <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
            <h3 class="fourth1ii1">Public Service Announcement</h3>
            <p class="wrap">The executive Governor of Enugu state Dr. Peter Ndubisi Mbah and the...</p>
          </div>
        </a>
        
        <a href="" class="color">
          <div class="fourth22">
            <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
            <h3 class="fourth1ii1">Ministry Project</h3>
            <p class="wrap">Get your latest project update from the ministry project section ...</p>
          </div>
        </a>
        
        <a href="" class="color">
          <div class="fourth22">
            <img src="index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="fourth1i1">
            <h3 class="fourth1ii1">Department Anouncement</h3>
            <p class="wrap">The department of Engineering are informing the whole office ...</p>
          </div>
        </a>
      </div>
      <div class="center">
        <button class="see"><a href="body/media/news-logout.php" class="first3ii">SEE MORE NEWS</a></button>
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
            <p> <img src="index/email-8-svgrepo-com.svg" alt="" class="fifthimg"> Ensubeb@enugustate.gov.ng</p>
            <p class="drag"> <img src="index/location-pin-alt-svgrepo-com.svg" alt="" class="fifthimg"> Upper Presidential Road Independence Layout,Weac Bus Stop, Enugu</p>
            <p class="drag"> <img src="index/phone-call-svgrepo-com.svg" alt="" class="fifthimg"> 08036703633</p>
          </div>
        </div>
        <div class="fifth3">
          <h2 class="h2">SOCIALS</h2>
          <div class="fifthii">
            <div><a href=""><img src="index/facebook-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
            <div><a href=""><img src="index/whatsapp-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
            <div class="down"><a href=""><img src="index/instagram-167-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
            <div class="down"><a href=""><img src="index/twitter-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
          </div>
        </div>  
      </div>
      <div class="last">
        <p class="last1">@  All Copy Rights Belongs To ENSUBEB</p>
      </div>
      <script type="module" src="index/index.js"></script>
    </body>
    </html>
    
<?php
  }
?>

  