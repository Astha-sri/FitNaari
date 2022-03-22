<?php

 // Database connection
 $conn = new mysqli("localhost","root","","women_wellness");

if(isset($_POST['button'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contactus (FullName, Email, Mobile, Query) VALUES (?, ?, ?, ?)");
    // echo $conn -> error;die;
    $stmt->bind_param("ssss", $fullName, $email, $mobile, $message);
    $stmt->execute();
    echo '<script type="text/JavaScript">
     alert("Query sent successfully");
     </script>';
    $stmt->close();
    $conn->close();
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Trispace:wght@600&display=swap" rel="stylesheet">
  </head>
  <style>
    .navbar{
  width: 100%;
  height: 100px;
  background-color: #fff;
  position: fixed;
  top:0;
  right: 0;
  left: 0;
  z-index: 1;
  border-bottom: #162252;
}

/* The sidebar menu */
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 5; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #faebeb; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #162252;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #6666FF;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #faebeb;
  color:#162252;
  padding: 10px 20px;
  border-radius: 100%;
  border-color:  #AAAAFF;
}

.openbtn:hover {
  background-color: #FF416C;
}

#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.logo{
  width: 50px;
  height: 50px;
  padding-left: 10px;
}

.links{
  float:left;
  padding:35px 0 0px 500px;
}

.hlink{
  font-weight: bolder;
  font-size: 22px;
  font-family: 'IBM Plex Sans', sans-serif;
}

.hlink:link, .hlink:visited, .hlink:active {
  color: #284c63;
  background-color: transparent;
  text-decoration: none;
}
  </style>
  <body>
    

    <!-- NAVBAR -->

    
  <div class="navbar">
    <!-- MENU ICON -->
    <div id="mySidebar" class="sidebar" style="float:left;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- <a href="/heath/aboutus.php">About us</a> -->
    <a href="myprofile.php">My Profile</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="bmi.php">BMI Calculator</a>
    <a href="contact.php">Contact Us</a>
    <a href="faqs.php">FAQS</a>
    <a href="logout.php">Logout</a>
  </div>
  <div id="main" style="float:left;">
   <button class="openbtn" onclick="openNav()">☰</button>
 </div>

    <div class="logo" style="float:left;">
      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/fitnaarilogo.png" width="250px" height="100px">
    </div>

    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="#contact" class="btn">Contact us</a>
    </div>
    </div>
  </div>

  
 <div class="connect">
   
  <img class="contact-image" src="images/cc.jpg">
</div>  

<div id="contact" class="add-info">
<div class="info-form">
<h2 class="heading">DROP YOUR QUERY!</h2>
<p class="para">Fill in your query and we will be in touch in lightening speed.</p>
<form class="message" action="contact.php" method="POST">
  <label for="">Full Name</label>
   <input type="text" name="name" placeholder="Enter your First Name" style="height:35px; width:400px; margin-left:40px;">
   <br><br>
   <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter your Email" style="height:35px; width:400px;margin-left:100px;">
    <br><br>
    <label for="">Mobile</label>
    <input type="text" name="mobile" maxlength="10" placeholder="Enter your Mobile Number" style="height:35px; width:400px;margin-left:85px;">
    <br><br>
    <label for="">Message</label><br>
    <textarea name="message" rows="8" cols="80" placeholder="Drop your query here.." ></textarea>
    <br><br>
    <button id="subm" type="Submit" name="button" class="btn">SUBMIT</button>
</form>
</div>
<div class="info-add">
  <h2 class="heading" style="color: #fff;">CONNECT WITH US:</h2><br>
  <pre>

  </pre>
  <h4 class="heading2">HELPLINE NUMBERS</h3>
    <pre class="message1">
    0832-4324-1344
    0832-6547-4334
    9875673844
    8765849374
    </pre class="message1">
  <h4 class="heading2">EMAIL</h3>
    <pre class="message1">
    For any support or any query:
    womenwellness@gmail.com
    </pre>

</div>

</div>


<div class="copyright">
  <div class="container-fluid" style="padding-top:15px;">
    <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
    <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
    <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
    <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


    <p>All Rights Reserved. © Copyright 2022 FitNaari.</p>

  </div>
</div>

    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
